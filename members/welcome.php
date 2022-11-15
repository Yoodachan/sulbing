<!DOCTYPE html>
<html lang="ko">
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
  <link rel="stylesheet" href="../css/reset.css">
  <!-- 회원가입 완료 css -->
  <link rel="stylesheet" href="../css/welcome.css">
  <!-- 애니메이션 css -->
  <link rel="stylesheet" href="../css/anime.css">
  <!-- 헤더 & 푸터 css -->
  <link rel="stylesheet" href="../css/header_and_footer.css">

  <!-- 메인 js -->
  <script defer src="../JS/welcome.js"></script>
  <!-- 헤더 & 푸터 js -->
  <script defer src="../JS/header_and_footer.js"></script>

  <title>회원 가입 완료 | 설빙</title>
</head>
<body>
 
  <!-- 헤더 영역 시작 -->

  <?php include "../inc/header.php"; ?>

  <!-- 헤더 영역 종료 -->

<main> 
  <section class="title_wrap">
    <div class="common_title">
      <div class="inner_title drop_down_off">
        <span class="title_left left_move_off"></span>
        <h2 class="title_text"><a href="./Sulbing_join_유다찬.html">회원 가입 완료</a></h2>
        <span class="title_right right_move_off"></span>
      </div>

      <ul class="location">
        <li><a href="./Sulbing_index_유다찬.html">홈</a></li>
        <li><p>회원가입</p></li>
        <li><p>회원가입 완료</p></li>
      </ul>
    </div>
  </section>


  <section class="register_wrap">

    <div class="register_inner">

        <div class=inner_top>
          <img class="register_img anime_off" src="../IMAGES/img_register_complate_character.png" alt="설빙 캐릭터 그림">
        </div>

        <div class="inner_bottom">
            <div class="register_text_wrap">
              <div class="register_title">
                <span class="welcome">환</span>
                <span class="welcome">영</span>
                <span class="welcome">합</span>
                <span class="welcome">니</span>
                <span class="welcome">다</span>
                <span class="welcome">!</span>
              </div>
              
              <strong class="welcome_clear welcome_down_off_00">설빙 회원 가입이 완료 되었습니다.</strong>
              <strong class="welcome_service welcome_down_off_01">설빙의 다양한 서비스를 이용해 보세요!</strong>
              <i class="welcome_user welcome_down_off_02"><em><?php echo $s_name; ?></em>님의 설빙 아이디는<em><?php echo $s_name; ?></em>입니다.</i>
              <a class="home_btn btn_left_off" href="../index.php">홈으로 이동</a>
            </div>
        </div>



    </div>
  </section>
</main>

<!-- 푸터 영역 시작 -->

<?php include "../inc/footer.php"; ?>

<!-- 푸터 영역 종료 -->

      
</body>
</html>