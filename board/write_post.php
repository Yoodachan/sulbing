<?php 
include "../inc/session.php"; 

// DB 연결
include "../inc/dbcon.php";





// 테이블 이름
$table_name = "sing_board_data";

$b_id = "test";

// top에서 제일 높은 값 
$query = "select max(b_top) from $table_name where b_id='$b_id' ";
$result = mysqli_query($dbcon,$query);
$data = mysqli_fetch_array($result);

$b_top = $data[0]+1;
// echo $top;
// exit;

$b_subject = $_POST["b_subject"];
$b_name = $_POST["b_name"];
$b_email = $_POST["b_email"];
$b_pwd = $_POST["b_pwd"];
$b_memo = $_POST["b_memo"];
$b_url = $_POST["b_url"];
$b_regdate = time();


// 쿼리 작성
$sql = "insert into $table_name(";
$sql .= "b_id, b_subject, b_name, b_email, b_pwd, b_memo, b_url, b_regdate, b_top";
$sql .= ")values(";
$sql .= " '$b_id', '$b_subject', '$b_name', '$b_email', '$b_pwd', '$b_memo', '$b_url', '$b_regdate', '$b_top' ";
$sql .= ");";

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"list.php\";
    </script>
    ";


// DB 접속 종료
mysqli_close($dbcon);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

</head>
<body>
</body>
</html>