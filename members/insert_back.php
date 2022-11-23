<?php
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
$marketing = isset($_POST["apply_marketing"])?  $_POST["apply_marketing"] : "n";

//새로 추가



// 시간 구하기
$reg_date = date("Y-m-d");





// 값 확인
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

session_start();

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
// echo $sql;
// exit; 

mysqli_query($dbcon, $sql);

$sql_id = "select idx, u_name, u_id, pwd from users where u_id='$u_id';";

$result = mysqli_query($dbcon, $sql_id);

$num = mysqli_num_rows($result);

if(!$num){ // 일치하는 아이디가 없다면
    // 메세지 출력 후 이전 페이지로 이동
    echo "
        <script type=\"text/javascript\">
            alert(\"일치하는 아이디가 없습니다.\");
            // location.href = \"login.php\";
            history.back();
        </script>
    ";
} else {// 일치하는 아이디가 존재하면
    // DB에서 사용자 정보 가져오기
    $array = mysqli_fetch_array($result);
        // 세션 변수 생성
        // $_SESSION["세션변수명"] = "저장할 값";
        $_SESSION["w_idx"] = $array["idx"];
        $_SESSION["w_name"] = $array["u_name"];
        $_SESSION["w_id"] = $array["u_id"];
        /* echo $_SESSION["s_idx"]." / ";
        echo $_SESSION["s_name"]." / ";
        echo $_SESSION["s_id"]; */
    };


mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        // location.href = \"이동할 페이지 주소\";
        location.href = \"welcome.php\";
    </script>
    ";
