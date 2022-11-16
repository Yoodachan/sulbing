<?php
session_start();
// 이전 페이지에서 값 가져오기
//sql변수명      form id

$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$birth = $_POST["birth"];
$ps_code = $_POST["ps_code"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$addr3 = $_POST["addr3"];
$marketing = $_POST["apply_marketing"];

//새로 추가



// 시간 구하기
$reg_date = date("Y-m-d");





// // 값 확인
// echo "<p> 이름 : ".$u_name."</p>";
// echo "<p> 아이디 : ".$u_id."</p>";
// echo "<p> 비밀번호 : ".$pwd."</p>";
// echo "<p> 전화번호 : ".$mobile."</p>";
// echo "<p> 이메일 : ".$email."</p>";

// echo "<p> 생년월일 : ".$birth."</p>";
// echo "<p> 우편번호 : ".$ps_code."</p>";
// echo "<p> 주소1 : ".$addr1."</p>";
// echo "<p> 주소2 : ".$addr2."</p>";
// echo "<p> 주소3 : ".$addr3."</p>";

// echo "<p> 마케팅 : ".$marketing."</p>";

// echo "<p> 가입일 : ".$reg_date."</p>"; 

// exit;





include "../inc/dbcon.php";


$sql = "insert into users(";
$sql .= "u_name, u_id, pwd, ";
$sql .= "mobile, birth, email, ";
$sql .= "ps_code, addr1, addr2, addr3, ";
$sql .= "marketing, reg_date";
$sql .= ") values(";
$sql .= "'$u_name', '$u_id', '$pwd',";
$sql .= "'$mobile', '$birth', '$email',";
$sql .= "'$ps_code', '$addr1', '$addr2', '$addr3', ";
$sql .= "'$marketing', '$reg_date');";


mysqli_query($dbcon, $sql);


$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];

// 쿼리 작성
// select u_id, pwd from members where u_id='$u_id';
$sql_login = "select idx, u_name, u_id, pwd from users where u_id='$u_id';";
// echo $sql;

// 쿼리 전송
$result = mysqli_query($dbcon, $sql_login);

// DB에서 데이터 가져오기
// mysqli_fetch_row("전송한 쿼리"); // 컬럼 순서
/* $row = mysqli_fetch_row($result);
echo $row[1]; */

// mysqli_fetch_array("전송한 쿼리"); // 컬럼 이름
/* $array = mysqli_fetch_array($result);
echo $array["pwd"]; */

// mysqli_num_rows("전송한 쿼리"); // 전체 데이터 수
$num = mysqli_num_rows($result);
// echo $num;

    $array = mysqli_fetch_array($result);
    $g_pwd = $array["pwd"];


    // 세션 변수 생성
    // $_SESSION["세션변수명"] = "저장할 값";
    $_SESSION["s_idx"] = $array["idx"];
    $_SESSION["s_name"] = $array["u_name"];
    $_SESSION["s_id"] = $array["u_id"];
    /* echo $_SESSION["s_idx"]." / ";
    echo $_SESSION["s_name"]." / ";
    echo $_SESSION["s_id"]; */

// DB 종료
mysqli_close($dbcon);

// 페이지 이동
echo "
    <script type=\"text/javascript\">
        location.href=\"welcome.php\";
    </script>
";


?>