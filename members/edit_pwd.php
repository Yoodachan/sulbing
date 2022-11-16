<?php
// 세션
include "../inc/session.php";

// 데이터 가져오기
$pwd = $_POST["pwd"];


// 값 확인
// echo "<p> 전화번호 : ".$mobile."</p>";
// echo "<p> 이메일 : ".$email."</p>";
// echo "<p> 우편번호 : ".$ps_code."</p>";
// echo "<p> 기본주소 : ".$addr1."</p>";
// echo "<p> 상세주소 : ".$addr2."</p>";
// echo "<p> 참조항목 : ".$addr3."</p>";
// echo "<p> 마케팅체크 : ".$marketing."</p>"; 
// exit;

// DB 접속
include "../inc/dbcon.php";

// 쿼리 작성
// update 테이블명 set 필드명='값', 필드명='값',,,, where 필드명='값';

// users_info 비밀번호 제외한 연락처 이메일 주소 마케팅동의
$sql = "update users set pwd='$pwd' where idx=$s_idx; ";
// echo $sql;

// 쿼리 전송
// mysqli_query(DB 연결객체, 전송할 쿼리)
mysqli_query($dbcon, $sql);


// DB 종료
mysqli_close($dbcon);

// 페이지 이동
echo "
    <script type=\"text/javascript\">
        alert(\"수정되었습니다.\");
        location.href = \"user_info.php\";
    </script>
    ";
?>