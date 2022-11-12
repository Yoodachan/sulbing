<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 카테고리
$cate = isset($_GET["cate"])? $_GET["cate"] : "";

// 테이블 이름
$table_name = "board";

// 쿼리 작성
if($cate){
    $sql = "select * from $table_name where cate='$cate';";
} else{
    $sql = "select * from $table_name;";
};
/* echo $sql;
exit; */

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 5;

// paging : 한 블럭 당 페이지 수
$page_num = 3;

// paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
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
            // console.log(idx);
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
    <?php include "../inc/sub_header.html"; ?>
    <!-- 콘텐트 -->
    <h2>게시판</h2>
    <p class="write_area">
        <span>전체 <?php echo $total; ?>개</span>
        <span><a href="write.php">[글쓰기]</a></span>
    </p>

    <p>
        <select name="cate" id="cate" class="cate" onchange="sel_cate()">
            <option value=""<?php if($cate == "") echo " selected"; ?>>전체</option>
            <option value="normal"<?php if($cate == "normal") echo " selected"; ?>>일반</option>
            <option value="music"<?php if($cate == "music") echo " selected"; ?>>음악</option>
            <option value="movie"<?php if($cate == "movie") echo " selected"; ?>>영화</option>
        </select>
    </p>

    <table class="board_list_set">
        <tr class="board_list_title">
            <th class="no">번호</th>
            <th class="b_title">제목</th>
            <th class="b_name">작성자</th>
            <th class="w_date">날짜</th>
            <th class="cnt">조회수</th>
        </tr>
        <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개 + 카테고리
            // 쿼리 작성
            if($cate){
                $sql = "select * from $table_name where cate='$cate' order by idx desc limit $start, $list_num;";
            } else{
                $sql = "select * from $table_name order by idx desc limit $start, $list_num;";
            };
            
     
            // DB에 데이터 전송
            $result = mysqli_query($dbcon, $sql);

            // DB에서 데이터 가져오기
            // pager : 글번호(역순)
            // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
            $i = $total - (($page - 1) * $list_num);
            while($array = mysqli_fetch_array($result)){
        ?>
        <tr class="board_list_content">
            <td><?php echo $i; ?></td>
            <td class="board_content_title">
                <a href="view.php?b_idx=<?php echo $array["idx"]; ?>">
                [<?php 
                if($array["cate"] == "normal"){
                    echo "일반";
                } else if($array["cate"] == "music"){
                    echo "음악";
                } else if($array["cate"] == "movie"){
                    echo "영화";
                };                
                ?>] 
                <?php echo $array["b_title"]; ?>
            </a>
            </td>
            <td><?php echo $array["b_name"]; ?></td>
            <?php $w_date = substr($array["w_date"], 0, 10); ?>
            <td><?php echo $w_date; ?></td>
            <td><?php echo $array["cnt"]; ?></td>
        </tr>
        <?php
                $i--;
            }; 
        ?>
    </table>
    <p class="pager">
    <?php
    // pager : 이전 페이지
    if($page <= 1){
    ?>
    <a href="list.php?cate=<?php echo $cate; ?>&page=1">이전</a>
    <?php } else{ ?>
    <a href="list.php?cate=<?php echo $cate; ?>&page=<?php echo ($page - 1); ?>">이전</a>
    <?php }; ?>

    <?php
    // pager : 페이지 번호 출력
    for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
    ?>
    <a href="list.php?cate=<?php echo $cate; ?>&page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
    <?php }; ?>

    <?php
    // pager : 다음 페이지
    if($page >= $total_page){
    ?>
    <a href="list.php?cate=<?php echo $cate; ?>&page=<?php echo $total_page; ?>">다음</a>
    <?php } else{ ?>
    <a href="list.php?cate=<?php echo $cate; ?>&page=<?php echo ($page + 1); ?>">다음</a>
    <?php }; ?>
    </p>
</body>
</html>