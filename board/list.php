<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

//카테고리
$cate = isset($_GET["cate"])? $_GET["cate"]: "";

// 테이블 이름
$table_name = "sing_board_data";


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
    <table width=600 border=1>
        <tr>
            <td> no </td>
            <td> Subject </td>
            <td> Name </td>
            <td> Hit </td>
            <td> Date </td>
        </tr>
    <?php
    //update sing_board_data set top=idx
        //일반 작성   

        // top == 정렬 순서

        $query = "select * from $table_name order by b_top desc;";
        //update sing_board_data set top=idx
        // 정렬 order by idx desc 
        $result = mysqli_query($dbcon,$query);

        // 쿼리한 게시물의 총 개수 구하는 함수
        // $total = mysqli_affected_rows(); 안되서 바꿈
        $total = mysqli_num_rows($result);

        $cnt= 0;
        while ($data = mysqli_fetch_array($result)) {   
    ?>
        <tr>
            <td> <?php echo $total-$cnt; ?> </td>
            <td> <a href="view.php?b_id=<?php $data["b_id"] ?>"> <?php echo $data["b_subject"]?> </a> </td>
            <td> <?php echo $data["b_name"] ?> </td>
            <td> <?php echo $data["b_hit"] ?> </td>
            <td> <?php echo date("m/d H:i",$data["b_regdate"]) ?> </td>
        </tr>
    <?php 
        $cnt ++;
        };   
    ?>
    </table>
    <a href="write.php">글쓰기</a>
    
</body>
</html>