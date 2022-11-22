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
   <!-- 리캅챠 -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- 초기값 리셋 css -->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- 로그인 css -->
    <link rel="stylesheet" href="../CSS/login.css">
    <!-- 애니메이션 css -->
    <link rel="stylesheet" href="../CSS/anime.css">
    <!-- 헤더 & 푸터 css -->
    <link rel="stylesheet" href="../css/header_and_footer.css">

    <!-- 로그인 js -->
    <script defer src="../js/login.js"></script>
    <!-- 헤더 & 푸터 js -->
    <script defer src="../js/header_and_footer.js"></script>

    <title> 로그인 | 설빙</title>
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
        <h2 class="title_text"><a href="./Sulbing_join_유다찬.html">로그인</a></h2>
        <span class="title_right right_move_off"></span>
      </div>

      <ul class="location">
        <li><a href="./Sulbing_index_유다찬.html">홈</a></li>
        <li><p>로그인</p></li>
      </ul>
    </div>
  </section>

  <form name="login_form" action="login_ok.php" method="post" onsubmit="return login_form_check()">
    <div class="login_wrap">
      <fieldset class="login_inner">
        <legend>회원로그인</legend>
            <p class="id_line">
                <label for="u_id"><strong>ID</strong></label>
                <input type="text" name="u_id" id="u_id" placeholder="아이디" autofocus>
            </p>
            <p class="pwd_line">
                <label for="pwd"><strong>PW</strong></label>
                <input type="password" name="pwd" id="pwd" placeholder="비밀번호">
            </p>
            <p class="phone_check">
              <span class="info_txt">
                <i>정보보호를 위해</i>
                아이디, 비밀번호와 함께 자동가입 방지 체크를 해주셔야 합니다.
              </span>
            </p>
            <fieldset class="captacha">
              <legend>자동등록방지</legend>
              <div class="g-recaptcha" data-sitekey="6Le-vuwiAAAAAN4vjU1juzYfnTVnWaQV1hcE9-Fx"></div>
            </fieldset>
            <label id="id_save_wrap" for="id_save">
              <p  class="id_save_inner">
                <input id="id_save" name="id_save" type="checkbox">
                <span>아이디저장</span>
              </p>
            </label>
            <p class="login_btn_wrap">
              <button class="login_btn" type="submit">로그인</button>
            </p>
            <p class="naver_btn_wrap">
              <button class="naver_btn" type="button">
                <img src="../images/naver_login_btn.png" alt="네이버 로그인 버튼 이미지">
                <span>네이버 로그인</span>
              </button>
            </p>
      </fieldset>
      <div class="login_banner">
        <img class="campaign campaign_off" src="../images/img_login_banner_w.jpg">
      </div>

    </div>
  </form>
</main>

<!-- 푸터 영역 시작 -->

<?php include "../inc/footer.php"; ?>

<!-- 푸터 영역 종료 -->

</body>

</html>
 