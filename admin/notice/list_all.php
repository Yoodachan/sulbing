<?php
include "../inc/session.php";
include "../inc/admin_check.php";
// DB 연결
include "../inc/dbcon.php";

//카테고리
$cate = isset($_GET["cate"])? $_GET["cate"]: "";

// 테이블 이름
$table_name = "notice";

// 쿼리 작성
if($cate){
    $sql = "select * from $table_name where cate='$cate';";
} else{
    $sql = "select * from $table_name;";
};


// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 15;

// paging : 한 블럭 당 페이지 수
$page_num = 7;

// paging : 현재 페이지
$page_notice = isset($_GET["page_notice"])? $_GET["page_notice"] : 1;
$page_news = isset($_GET["page_notice"])? $_GET["page_notice"] : 1;
$page_all = isset($_GET["page_all"])? $_GET["page_all"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
    $now_block = ceil($page_all / $page_num);

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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <meta name="description" content="코리안 디저트카페, 인절미설빙, 빙수, 디저트, 음료, 메뉴, 전국매장안내, 이벤트, 고객센터" />
  <meta name="apple-mobile-web-app-title" content="코리안 디저트 카페, 인절미설빙, 메뉴, 전국매장 안내, 이벤트, 고객센터">
  <meta property="og:locale" content="ko_KR">
  <meta property="og:site_name" content="설빙">
  <meta property="og:title" content="설빙">
  <meta property="og:url" content="http://">
  <meta property="og:image" content="https://sulbing.com/theme/cntt/img/logo_300x300.png">
  <meta property="og:description" content="코리안 디저트 카페, 인절미설빙, 메뉴, 전국매장 안내, 이벤트, 고객센터">
  <meta name="twitter:title" content="코리안 디저트 카페, 인절미설빙, 메뉴, 전국매장 안내, 이벤트, 고객센터">
  <meta name="twitter:site" content="http://">
  <meta name="twitter:image" content="https://sulbing.com/theme/cntt/img/logo_300x300.png">
  <meta name="twitter:description" content="코리안 디저트 카페, 인절미설빙, 메뉴, 전국매장 안내, 이벤트, 고객센터">
  <meta name="naver-site-verification" content="4c28a9c772921b16e3cf7cc13b6f11e959f283b8"/> 
  <meta name="robots" content="noindex" />
  <link rel="shortcut icon" type="image/x-icon" href="https://sulbing.com/theme/cntt/img/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" href="/img/android-icon-192x192.png" sizes="192x192">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans+KR&display=swap" rel="stylesheet">
  <!-- 폰트어썸 -->
  <script src="https://kit.fontawesome.com/73110e26f5.js" crossorigin="anonymous"></script>
  <!-- 제이쿼리 -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>

  <!-- 초기값 리셋 css -->
  <link rel="stylesheet" href="../../css/reset.css">
  <!-- 뉴스&공지사항 리스트 css -->
  <link rel="stylesheet" href="../../css/list_notice_admin.css">
  <!-- 애니메이션 css -->
  <link rel="stylesheet" href="../../css/anime.css">
  <!-- 헤더 & 푸터 css -->
  <link rel="stylesheet" href="../../css/header_and_footer.css">

  <!-- 뉴스&공지사항 리스트 js -->
  <script defer src="../../js/list_notice_admin.js"></script>
  <!-- 헤더 & 푸터 js -->
  <script defer src="../../js/header_and_footer.js"></script>



    <title>설빙 | 뉴스&공지사항</title>
</head>
<body>

    <!-- 헤더 영역 시작 -->

    <?php include "../inc/header_ns.php"; ?>

    <!-- 헤더 영역 종료 -->

    <!-- 콘텐트 영역 시작 -->

 <section class="title_wrap">
    <div class="common_title">
      <div class="inner_title drop_down_off">
        <span class="title_left left_move_off"></span>
        <h2 class="title_text"><a href="./list.php">뉴스 & 공지사항</a></h2>
        <span class="title_right right_move_off"></span>
      </div>

      <ul class="location">
      <li><a href="../index.php">홈</a></li>
        <li><p>뉴스 & 공지사항</p></li>
      </ul>
    </div>
  </section>

  <ul class="tab_menu">
      <li><button type="button" class="tab_all">전체</button></li>
      <li><button type="button" class="tab_news">뉴스</button></li>
      <li><button type="button" class="tab_notice">공지사항</button></li>
  </ul>
  <div class="list_top">
    <form class="notice_seach_wrap">
            <select>
                <option>제목</option>
                <option>내용</option>
                <option>제목+내용</option>
            </select>
            <input type="text" placeholder="검색어를 입력해주세요.">
            <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  </div>

    <table class="notice_list_board">
        <tr class="notice_list_title">
            <th class="cate">카테고리</th>
            <th class="n_title">제목</th>
            <th class="w_date">날짜</th>
            <th class="n_cnt">조회수</th>
            <th class="n_mod_del">수정&삭제</th>
        </tr>
        <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page_all - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            if($cate){
                $sql = "select * from $table_name where cate='$cate' order by idx desc limit $start, $list_num;";
            } else{
                $sql = "select * from $table_name order by idx desc limit $start, $list_num;";
            };
            // echo $sql;
            /* exit; */

            // DB에 데이터 전송
            $result = mysqli_query($dbcon, $sql);

            // DB에서 데이터 가져오기
            // pager : 글번호(역순)
            // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
            $i = $total - (($page_all - 1) * $list_num);
            while($array = mysqli_fetch_array($result)){
        ?>



        <tr class="notice_list_content">
            <!-- 카테고리명 -->
            <td class="notice_cate">
            <a href="view.php?n_idx=<?php echo $array["idx"]; ?>">
            <?php 
                if($array["cate"] == ""){
                    echo "전체";
                } else if($array["cate"] == "news"){
                    echo "뉴스";
                } else if($array["cate"] == "notice"){
                    echo "공지"; 
                };
            ?>
            </a>
            </td>
            <!-- 제목 -->
            <td class="notice_content_title">
                
                <a href="view.php?n_idx=<?php echo $array["idx"]; ?>">
                <?php echo $i; ?>
                .
                <?php echo $array["n_title"]; ?>
                </a>
            </td>
            <!-- 작성일 -->
            <?php $w_date = substr($array["w_date"], 0, 10); ?>
            <td class="date"><?php echo $w_date; ?></td>
            <!-- 조회수 -->
            <td class="cnt"><?php echo $array["cnt"]; ?></td>
            <!-- 수정 및 삭제 -->
            <td class="mod_del">
                <a class="list_mod" href="modify.php?n_idx=<?php echo $array["idx"]; ?>">수정</a>
                <a class="list_del" href="#" onclick=" remove_notice( <?php echo $array['idx']; ?> ) "> 삭제 </a>
            </td>
        </tr>
        <?php
                $i--;
            }; 
        ?>
    </table>

    <div class="pager_wrap">
        <?php if($s_id == "admin"){ ?>
        <div class="admin_area">
        <h3>전체 글 <?php echo $total; ?>개</h3>
        </div>
        <?php }; ?>
        <p class="pager_inner">
            <!-- 일반 페이지 -->
            <?php
            // pager : 이전 페이지
            if($page_all <= 1){
            ?>
            <a class="prev_btn btn_off" href="list_all.php?page_all=1">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
            <?php } else{ ?>
            <a class="prev_btn"href="list_all.php?page_all=<?php echo ($page_all - 1); ?>">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
            <?php }; ?>

            <?php
            // pager : 페이지 번호 출력
            for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
            ?>
            <a class="page_num" href="list_all.php?page_all=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
            <?php }; ?>

            <?php
            // pager : 다음 페이지
            if($page_all >= $total_page){
            ?>
            <a class="next_btn btn_off" href="list_all.php?page_all=<?php echo $total_page; ?>">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
            <!-- 이전 페이지 -->
            <?php } else{ ?>
            <a class="next_btn" href="list_all.php?page_all=<?php echo ($page_all + 1); ?>">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
            <?php }; ?>


        </p>
        <?php if($s_id == "admin"){ ?>
        <p class="admin_area">
        <a href="write.php">글 작성</a>
        </p>
        <?php }; ?>

    </div>

    <!-- 콘텐트 영역 종료 -->


    <!-- 푸터 영역 시작 -->

    <?php include "../../inc/footer.php"; ?>

    <!-- 푸터 영역 종료 -->

</body>
</html>