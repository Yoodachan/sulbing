<?php

// 로그인 사용자만 접근

include "../inc/session.php";

// 로그인 사용자만 접근
include "../inc/login_check.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from users where idx=$s_idx;";

// 쿼리 실행
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
// mysqi_fetch_row(쿼리실행문) -- 필드순서
// mysqi_fetch_array(쿼리실행문) -- 필드이름
// mysqi_num_rows(쿼리실행문) -- 전체 행 개수
$array = mysqli_fetch_array($result);


?>

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
    <!-- 마이페이지 css -->
    <link rel="stylesheet" href="../css/mypage.css">
    <!-- 애니메이션 css -->
    <link rel="stylesheet" href="../css/anime.css">
    <!-- 헤더 & 푸터 css -->
    <link rel="stylesheet" href="../css/header_and_footer.css">

    <!-- 마이페이지 js -->
    <script defer src="../js/mypage.js"></script>
    <!-- 헤더 & 푸터 js -->
    <script defer src="../js/header_and_footer.js"></script>

    <title> 마이페이지 | 설빙</title>
</head>

<body>

<!-- 헤더 영역 시작 -->

<?php include "../inc/header_ns.php"; ?>

<!-- 헤더 영역 종료 & 메인 영역 시작 -->

<main>

<!-- 타이틀 영역 시작 -->

  <section class="title_wrap">
    <div class="common_title">
      <div class="inner_title drop_down_off">
        <span class="title_left left_move_off"></span>
        <h2 class="title_text"><a href="../index.php">마이페이지</a></h2>
        <span class="title_right right_move_off"></span>
      </div>

      <ul class="location">
        <li><a href="../index.php">홈</a></li>
        <li><p>마이페이지</p></li>
      </ul>
    </div>
  </section>

<!-- 타이틀 영역 종료 & 콘텐트 영역 시작  -->
  
  <section id="content">
    <div class="inner page_wrap">
      <div class="mypage_intro">
        <h5>
          <strong>안녕하세요<em>
            <?php echo $array["u_name"]; ?>
            <?php if ($s_id == "admin") { ?> 
            님! 
            <?php } else { ?> 
            고객님!
            <?php } ?>
          </em></strong>
          <span> 마이페이지에서는 고객님의 정보 및 활동 내용을 확인할 수 있습니다. </span>
        </h5>

        <ul class="mypage_link">
      
          <li class="inf">
            <a href="./user_info.php" alt="개인정보 관리 이동">

              <!-- 기본 배경 -->
              <i class="inf_back_off">
              <!-- 변경 아이콘 -->
                <span class="inf_icon icon_off"></span>
              </i>
              <i class="inf_back_on back_hidden">
                <span class="inf_icon icon_on"></span>
              </i>

              <strong>개인정보 관리</strong>
              <span>
                간단한 절차를 통해 고객님의
                <em>정보를 수정할 수 있습니다.</em>
              </span>
              <em class="inf_link link_off" >바로가기</em>
            </a>
          </li>

          <li class="qnl">
            <a href="#" alt="온라인 상담내역 이동">

              <i class="qnl_back_off">

              <span class="qnl_icon icon_off"></span>
              </i>
              <i class="qnl_back_on back_hidden">
                <span class="qnl_icon icon_on"></span>
              </i>

              <strong>온라인 상담내역</strong>
              <span>
              홈페이지를 통해 온라인 상담한
              <em>내역을 확인할수 있습니다.</em>
              </span>
              <em class="qnl_link link_off">바로가기</em>
            </a>

          </li>

        </ul>

      </div>

    </div>

  </section>

</main>

<!-- 메인 영역 & 타이틀 영역 종료  -->

<!-- 푸터 영역 시작 -->

<?php include "../inc/footer.php"; ?>

<!-- 푸터 영역 종료 -->

</body>

</html>
 