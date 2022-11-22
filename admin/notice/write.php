<?php 
include "../inc/session.php"; 
include "../inc/admin_check.php";
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
  <!-- 뉴스&공지사항 css -->
  <link rel="stylesheet" href="../../css/write_notice.css">
  <!-- 애니메이션 css -->
  <link rel="stylesheet" href="../../css/anime.css">
  <!-- 헤더 & 푸터 css -->
  <link rel="stylesheet" href="../../css/header_and_footer.css">

  <!-- 뉴스&공지사항 작성 js -->
  <script defer src="../../js/write_notice.js"></script>
  <!-- 헤더 & 푸터 js -->
  <script defer src="../../js/header_and_footer.js"></script>

    <title> 뉴스&공지사항 작성 | 설빙 </title>
</head>

<body>
    <!-- 헤더 영역 시작 -->

    <?php include "../inc/header_ns.php"; ?>

    <!-- 헤더 영역 종료 -->

    <!-- 타이틀 영역 시작 -->

    <section class="title_wrap">
    <div class="common_title">
        <div class="inner_title drop_down_off">
        <span class="title_left left_move_off"></span>
        <h2 class="title_text"><a href="../../index.php">뉴스&공지사항 작성</a></h2>
        <span class="title_right right_move_off"></span>
        </div>
        <ul class="location">
        <li><a href="./Sulbing_index_유다찬.html">홈</a></li>
        <li><p>뉴스&공지사항 작성</p></li>
        </ul>
    </div>
    </section>

    <!-- 타이틀 영역 시작 -->

    <!-- 콘텐츠 영역 시작 -->

    <form name="notice_form" action="insert.php" method="post" enctype="multipart/form-data" onsubmit="return notice_check()">
        <table class="notice_modify_board">

            <caption>뉴스&공지사항 작성</caption>

            <tr class="notice_cate_wrap">
                <th><label for="cate">카테고리</label></th>
                <td>
                    <div class="cate_news_btn check_off">
                    <span>
                    <i class="fa-solid fa-check"></i>
                        뉴스
                    </span>
                    <input id="n_cate_news" type="hidden" name="cate" value="news" disabled>
                    </div>

                    <div class="cate_notice_btn check_off">
                    <span>
                    <i class="fa-solid fa-check"></i>
                        공지
                    </span>
                    <input id="n_cate_notice" type="hidden" name="cate" value="notice" disabled>
                    </div>
                </td>
            </tr>

            <tr class="notice_title_wrap">
                <th><label for="n_title">제목</label></th>
                <td><input type="text" name="n_title" id="n_title"></td>
            </tr>

            <tr class="notice_content_wrap">
                <th>
                    <label for="n_content">내용</label>
                </th>
                <td>
                    <textarea cols="60" rows="10" name="n_content" id="n_content"></textarea>
                </td>
            </tr>
            <tr class="notice_file_wrap">
                <th>
                    <p> 첨부파일 </p>
                </th>

                <td>
                <!-- 파일 업로드 인풋 -->
                <label for="up_file" id="up_file_btn">
                <span>파일 업로드</span>
                <input type="file" name="up_file" id="up_file">
                </label>

                <div class="file_wrap">
                <!-- 파일명 -->
                <p class="file_name"><p>
                </div>   
                </td>
            </tr>
        </table>

        <div class="notice_list">
        <a class="notice_list_btn btn_prev" href="list_all.php">이전</a>
        <button class="notice_list_btn btn_submit" type="submit">등록</button>
        </div>

    <!-- 콘텐츠 영역 종료  -->  
    
    <!-- 푸터 영역 시작 -->

    <?php include "../../inc/footer.php"; ?>

    <!-- 푸터 영역 종료 -->

</body>
</html>