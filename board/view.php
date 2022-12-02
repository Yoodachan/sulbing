<?php
// include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 테이블 이름
$table_name = "sing_board_data";


$b_idx = $_GET["b_idx"];
$b_id = $_GET["b_id"];




$query = " select * from $table_name where idx=$b_idx and b_id=$b_id; ";

$result = mysqli_query($dbcon,$query);

$data = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>



<?php
include "../inc/session.php";

// 데이터 가져오기
$b_idx = $_GET["b_idx"];

// 테이블 이름
$table_name = "board";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from $table_name where idx=$b_idx;";
/* echo $sql;
exit; */

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
</head>
<body>
    <!-- 콘텐트 -->
    <h2>게시판</h2>
    <table class="board_list_set">
        <tr class="board_list_title">
            <th class="v_title">작성자</th>
            <td class="v_content"><?php echo $array["b_name"]; ?></td>
        </tr>

        <tr class="board_list_title">
            <th class="v_title">비밀번호</th>
            <td class="v_content">
                <input type="text" name="b_pwd" id="b_pwd">
            </td>
        </tr>

        <tr class="board_view_content">
            <th class="v_title">날짜</th>
            <td class="v_content">
            <?php echo ($array["w_date"]); ?>
            </td>
        </tr>

        <tr class="board_view_content">
            <th class="v_title">제목</th>
            <td class="v_content"><?php echo $array["b_title"]; ?></td>
        </tr>
        
        <tr class="board_view_content">
            <th class="v_title">조회수</th>
            <td class="v_content"><?php echo $cnt; ?></td>
        </tr>
        <tr class="board_view_text">
            <td colspan="2" class="v_text">
            <?php 
            $b_content = str_replace("\n", "<br>", $array["b_content"]);
            $b_content = str_replace(" ", "&nbsp;", $b_content);
            echo $b_content; 
            ?>
            </td>
        </tr>
    </table>


</body>
</html>