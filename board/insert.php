<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

// 테이블 이름
$table_name = "board";

// 이전 페이지에서 값 가져오기
$b_name = $_POST["b_name"];
$b_pwd = $_POST["b_pwd"];
$cate = $_POST["cate"];
$b_title = $_POST["b_title"];
$b_content = $_POST["b_content"];

// 작성일자
$w_date = date("Y-m-d");

// 값 확인
/* 
echo "<p> 이름 : ".$b_name."</p>";
echo "<p> 비밀번호 : ".$b_pwd."</p>";
echo "<p> 비밀번호 : ".$cate."</p>";
echo "<p> 제목 : ".$b_title."</p>";
echo "<p> 내용 : ".$b_content."</p>";
echo "<p> 가입일 : ".$w_date."</p>";
exit; 
*/

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "insert into $table_name(";
$sql .= "b_name, b_pwd, cate, b_title, b_content, w_date";
$sql .= ") values(";
$sql .= "'$b_name', '$b_pwd', '$cate', '$b_title', '$b_content', '$w_date'";
$sql .= ");";
/* echo $sql;
exit; */

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);


// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"list.php\";
    </script>
    ";
?>