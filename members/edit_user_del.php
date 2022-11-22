<?php
// 데이터 가져오기 - post 방식 활용, 이전 페이지에 hidden 필드 사용
// $s_idx = $_POST["g_idx"];

// 데이터 가져오기 - get 방식 활용, 페이지 경로에 데이터 포함
/* $s_idx = $_GET["g_idx"]; */

// 데이터 가져오기 - 세션 활용
include "../inc/session.php";
// echo $s_idx."/".$s_name."/".$s_id;
// exit;

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성


// 테이블 이름
$table_name = 'users';


// delete from 테이블명 where 필드명='값';
$sql = "delete from $table_name where idx=$s_idx;";
// echo $sql;
// echo is_object($dbcon);
// exit;


// 쿼리 전송
mysqli_query($dbcon, $sql);

// 세션 삭제
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

// DB 종료
mysqli_close($dbcon);


// 페이지 이동
echo "
    <script type=\"text/javascript\">
        alert(\"정상 처리되었습니다.\");
        location.href = \"../index.php\";
    </script>
    ";
?>