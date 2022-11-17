<?php
// 세션으로 데이터 가져오기
/* session_start();
$s_idx =  isset($_SESSION["s_idx"])?  $_SESSION["s_idx"] : ""; */
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
  <!-- 회원탈퇴 css -->
  <link rel="stylesheet" href="../css/user_delete.css">
  <!-- 애니메이션 css -->
  <link rel="stylesheet" href="../css/anime.css">
  <!-- 헤더 & 푸터 css -->
  <link rel="stylesheet" href="../css/header_and_footer.css">

  <!-- 회원탈퇴 js -->
  <script defer src="../JS/user_delete.js"></script>
  <!-- 헤더 & 푸터 js -->
  <script defer src="../JS/header_and_footer.js"></script>


</head>
<body>

    <!-- 헤더 영역 시작 -->

    <?php include "../inc/header_ns.php"; ?>

    <!-- 헤더 영역 종료 -->

    <main>
    <section class="title_wrap">
      <div class="common_title">
        <div class="inner_title drop_down_off">
          <span class="title_left left_move_off"></span>
          <h2 class="title_text"><a href="./Sulbing_join_유다찬.html">개인정보 관리</a></h2>
          <span class="title_right right_move_off"></span>
        </div>
        <ul class="location">
          <li><a href="./Sulbing_index_유다찬.html">홈</a></li>
          <li><p>개인정보 관리</p></li>
        </ul>
      </div>
    </section>

    <ul class="board_tab">
      <li class="board_tab_off"><a href="./user_info.php">회원정보 수정</a></li>
      <li class="board_tab_off"><a href="./pwd_change.php">비밀번호 변경</a></li>
      <li class="board_tab_on"><a href="./users_delete.php">회원탈퇴</a></li>
    </ul>

    <form name="edit_form" action="edit_user_del.php" method="post" onsubmit="return user_del()">
      <h2 id="re_sign_text">
      설빙 회원 탈퇴를 하시면 설빙 회원 약관 및 개인정보 제공, 활용에 관한 약관
      <span>동의가 모두 철회되며 설빙 회원 서비스 및 웹사이트로부터 탈퇴됩니다.</span>
      </h2>
      <a href="#re_sign_text">
      설빙 서비스 이용약관 전문 >
      </a>
      <div class="mypage_info_text">
        <dl>
          <dt> 회원 탈퇴 유의 사항 </dt>
          <dd> 설빙 회원 탈퇴 시 30일 이내 재가입이 불가능합니다. </dd>
          <dd> 탈퇴와 관련된 모든 정책은 설빙 회원가입 시 동의하신 설빙 회원 약관 및 개인정보 제공, 활용 동의 내용에 따릅니다. </dd>
          <dd> 회원 정보 보존 안내 사항탈퇴 후 30일간 재가입 방지 및 포인트 불법 이용 및 부정 행위를 방지하기 위해 회원님의 아이디를 포함한 회원 정보가 보존됩니다.
          <span>(회원가입 시 동의하신 개인정보 처리 방침에 명시한 파기 절차와 방법에 따라 30일 이후 회원 정보를 지체 없이 파기합니다)</span>
          </dd>
        </dl>
      </div>

      <div class="form_btn_wrap">
        <button type="button" onclick="history.back()" class="cancel_btn">취소</button>
        <button type="submit" class="edit_btn">회원탈퇴</button>
      </div>
    </form>
    </main>

    <!-- 푸터 영역 시작 -->

    <?php include "../inc/footer.php"; ?>

    <!-- 푸터 영역 종료 -->

</body>
</html>