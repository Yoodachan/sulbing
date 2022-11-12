<?php
// 작성자 입력을 위한 session 가져오기
include "../inc/session.php";

// 이전 페이지에서 값 가져오기
$b_idx = $_GET["b_idx"];
$b_pwd = $_POST["b_pwd"];
$cate = $_POST["cate"];
$b_title = $_POST["b_title"];
$b_content = $_POST["b_content"];

// 테이블 이름
$table_name = "board";

// 작성일자
$w_date = date("Y-m-d");

// 값 확인
/* echo "<p> idx : ".$b_idx."</p>";
echo "<p> 비밀번호 : ".$b_pwd."</p>";
echo "<p> 카테고리 : ".$cate."</p>";
echo "<p> 제목 : ".$b_title."</p>";
echo "<p> 내용 : ".$b_content."</p>";
echo "<p> 가입일 : ".$w_date."</p>";
exit; */

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "update $table_name set ";
$sql .= "b_pwd='$b_pwd', ";
$sql .= "cate='$cate', ";
$sql .= "b_title='$b_title', ";
$sql .= "b_content='$b_content', ";
$sql .= "w_date='$w_date' ";
$sql .= "where idx=$b_idx;";
/* echo $sql;
exit; */

// 데이터베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

// DB 접속 종료
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"view.php?b_idx=$b_idx\";
    </script>
    ";
?>