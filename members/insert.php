<?php
// 이전 페이지에서 값 가져오기
//sql변수명      js변수명
$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $_POST["email"];
// $email = $email_id."@".$email_dns;
$birth = $_POST["birth"];
$ps_code = $_POST["ps_code"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$addr = $ps_code." ".$addr_b." ".$addr_d;
$gender = $_POST["gender"];
$apply = $_POST["apply"];

//새로 추가

$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$addr3 = $_POST["addr3"];
$marketing = $_POST["marketing"];


// 시간 구하기
$reg_date = date("Y-m-d");

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


mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        // location.href = \"이동할 페이지 주소\";
        location.href = \"welcome.php\";
    </script>
    ";
