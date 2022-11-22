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


$_SESSION["w_name"] = $array["u_name"];
$_SESSION["w_id"] = $array["u_id"];



mysqli_close($dbcon);







// 리디렉션
echo "
    <script type=\"text/javascript\">
        // location.href = \"이동할 페이지 주소\";
        location.href = \"welcome.php\";
    </script>
    ";
