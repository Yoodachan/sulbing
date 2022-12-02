

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
    <style>
        body, select, option{font-size:20px}
        a{text-decoration:none;margin:0 5px}
        .cate{width:120px}
        table, td{
            border-collapse:collapse
        }
        th, td, .pager{
            padding:10px;
            text-align:center
        }
        .board_list_set, .pager{
            width:860px
        }
        .board_list_title{
            border-top:2px solid #999;
            border-bottom:1px solid #999
        }
        .board_list_content{
            border-bottom:1px solid #999;
        }
        .no{width:60px}
        .b_title{width:500px}
        .b_name{width:100px}
        .w_date{width:120px}
        .cnt{width:80px}
        .board_content_title{text-align:left;padding-left:10px}

        a:hover{color:rgb(255, 128, 0)}

        .write_area{
            width:860px;
            display:flex;
            justify-content:space-between
        }
    </style>
    <script>
        function sel_cate(){
            var cate = document.getElementById("cate");
            var idx = cate.options.selectedIndex;
            //console.log(idx);
            var sel_cate_val = cate.options[idx].value;

            if(idx == 0){
            location.href = "list.php";
            } else{
            location.href = "list.php?cate="+sel_cate_val;        
            };
        };

    </script>


</head>
<body>
    <!-- 콘텐트 -->
    <h2>게시판</h2>
    <p class="write_area">
        <span><a href="write.php">[글쓰기]</a></span>
    </p>


    <table class="board_list_set">
        <tr class="board_list_title">
            <th class="no">번호</th>
            <th class="b_title">제목</th>
            <th class="b_name">작성자</th>
            <th class="b_hit">추천수</th>
            <th class="w_date">날짜</th>
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
</body>
</html>