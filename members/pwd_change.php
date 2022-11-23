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
  <!-- 비밀번호 변경 css -->
  <link rel="stylesheet" href="../css/pwd_change.css">
  <!-- 애니메이션 css -->
  <link rel="stylesheet" href="../css/anime.css">
  <!-- 헤더 & 푸터 css -->
  <link rel="stylesheet" href="../css/header_and_footer.css">

  <!-- 비밀번호 변경 js -->
  <script defer src="../js/pwd_change.js"></script>
  <!-- 헤더 & 푸터 js -->
  <script defer src="../js/header_and_footer.js"></script>


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
          <h2 class="title_text"><a href="../index.php">개인정보 관리</a></h2>
          <span class="title_right right_move_off"></span>
        </div>
        <ul class="location">
          <li><a href="../index.php">홈</a></li>
          <li><p>개인정보 관리</p></li>
        </ul>
      </div>
    </section>

    <ul class="board_tab">
      <li class="board_tab_off"><a href="./user_info.php">회원정보 수정</a></li>
      <li class="board_tab_on"><a href="./pwd_change.php">비밀번호 변경</a></li>
      <li class="board_tab_off"><a href="./user_delete.php">회원탈퇴</a></li>
    </ul>

    <form name="edit_form" action="edit_pwd.php" method="post" onsubmit="return edit_pwd_check()">

      <table class="pwd_change_board">
          <caption>비밀번호 변경</caption>

          <tr class="pwd_wrap">
              <th><label for="pwd">현재 비밀번호</label></th>
              <td>
                <div class="now_pwd_bt_wrap">
                  <input id="pwd_val" name="pwd_val" class="n_border" type="hidden" value="<?php echo $array["pwd"]; ?>"  <?php //onkeyup="now_pwd_text_on (this.value)"?>>
                  <input id="now_pwd" name="nowpwd" class="n_border" type="password" placeholder="영어,숫자,특수문자 조합 8~24자" <?php //onkeyup="now_pwd_text_on (this.value)"?>>
                  <button id="d_now_pwd" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
                  <button id="now_pwd_eye_on" class="on_view"  type="button"><i class="fa-solid fa-eye"></i></button>
                  <button id="now_pwd_eye_off" class="off_view"  type="button"><i class="fa-solid fa-eye-slash"></i></button>
                </div>
                <span id="now_pwd_text_wrap"  class="err_txt"></span>
              </td>
          </tr>

          <tr class="pwd_wrap">
              <th><label for="mobile">새 비밀번호</label></th>
              <td>
                <div class="pwd_bt_wrap">
                  <input id="pwd" name="pwd" class="n_border" type="password" placeholder="영어,숫자,특수문자 조합 8~24자">
                  <button id="d_pwd" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
                  <button id="pwd_eye_on" class="on_view"  type="button"><i class="fa-solid fa-eye"></i></button>
                  <button id="pwd_eye_off" class="off_view"  type="button"><i class="fa-solid fa-eye-slash"></i></button>
                </div>
                <span id="pwd_text_wrap"  class="err_txt"></span>
              </td>
          </tr>

          <tr class="pwd_wrap">
              <th><label for="mobile">새 비밀번호 확인</label></th>
              <td>
                <div class="re_pwd_bt_wrap">
                  <input id="re_pwd" name="re_pwd" class="n_border" type="password" placeholder="비밀번호 확인">
                  <button id="d_re_pwd" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
                  <button id="re_pwd_eye_on" class="on_view"  type="button"><i class="fa-solid fa-eye"></i></button>
                  <button id="re_pwd_eye_off" class="off_view" type="button"><i class="fa-solid fa-eye-slash"></i></button>
                </div>
                <span id="re_pwd_text_wrap"  class="err_txt"></span>
              </td>
          </tr>


      </table>

      <div class="form_btn_wrap">
        <button type="button" onclick="history.back()" class="cancel_btn">취소</button>
        <button type="submit" class="edit_btn">비밀번호 변경</button>
      </div>
    </form>
    </main>

    <!-- 푸터 영역 시작 -->

    <?php include "../inc/footer.php"; ?>

    <!-- 푸터 영역 종료 -->

</body>
</html>