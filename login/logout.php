<?php
session_start();

// 세션 삭제
// unset(세션변수);

unset($_SESSION["w_idx"]);
unset($_SESSION["w_name"]);
unset($_SESSION["w_id"]);

unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

// 페이지 이동
echo "
    <script type=\"text/javascript\">
        location.href=\"../index.php\";
    </script>
";
?>