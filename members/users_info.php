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
  <!-- 회원가입 완료 css -->
  <link rel="stylesheet" href="../css/users_info.css">
  <!-- 애니메이션 css -->
  <link rel="stylesheet" href="../css/anime.css">
  <!-- 헤더 & 푸터 css -->
  <link rel="stylesheet" href="../css/header_and_footer.css">

  <!-- 메인 js -->
  <script defer src="../JS/users_info.js"></script>
  <!-- 헤더 & 푸터 js -->
  <script defer src="../JS/header_and_footer.js"></script>


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
          <h2 class="title_text"><a href="./Sulbing_join_유다찬.html">개인정보 관리</a></h2>
          <span class="title_right right_move_off"></span>
        </div>
        <ul class="location">
          <li><a href="./Sulbing_index_유다찬.html">홈</a></li>
          <li><p>개인정보 관리</p></li>
        </ul>
      </div>
    </section>
    <form name="edit_form" action="edit.php" method="post" onsubmit="return edit_form_check()">
    <section class="form_title">
          <h3>기본 정보</h3>
        </section>
        <p class="name_wrap">
            <label for="u_name">이름</label>
            <div class="name_bt_wrap">
                <input id="u_name" name="u_name" class="n_border" type="text" placeholder="한글 2~20자">
                <button id="d_name" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
            </div>
            <span id="name_text_wrap"  class="err_txt"> 

            </span>
        </p>

        <section class="id_wrap">
            <label for="u_id">아이디</label>
            <div class="id_bt_wrap">
                <input id="u_id" name="u_id" class="n_border" type="text" placeholder="영소문자, 숫자 4~12자" onkeyup="name_text_on (this.value)">
                <button id="d_id" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
                <button id="id_btn"  type="button" onclick="id_search()">중복 확인</button>
            </div>
            <span id="id_text_wrap"  class="err_txt">
            </span>
        </section>

        <section class="psw_wrap">
            <label for="pwd">비밀번호</label>
            <div class="pwd_bt_wrap">
                <input id="pwd" name="pwd" class="n_border" type="password" placeholder="영어,숫자,특수문자 조합 8~24자">
                <button id="d_pwd" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
                <button id="pwd_eye_on" class="on_view"  type="button"><i class="fa-solid fa-eye"></i></button>
                <button id="pwd_eye_off" class="off_view"  type="button"><i class="fa-solid fa-eye-slash"></i></button>
            </div>
        </section>

        <section class="mobile_wrap">
            <label for="mobile">연락처</label>
            <div class="mobile_bt_wrap">
                <input id="mobile" name="mobile" class="n_border" type="text" placeholder="휴대폰 번호 입력 (&#34;-&#34;제외 11자리 입력)">
                <button id="d_mobile" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
            </div>
            <span id="mobile_text_wrap"  class="err_txt"></span>
        </section>


        <section class="birth_wrap">
          <label for="birth">생년월일</label>
          <div class="birth_bt_wrap">
            <input type="text" name="birth" id="birth" class="n_border" placeholder="ex) 20221006"/>
            <button id="d_birth" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
          </div>
          <span id="birth_text_wrap"  class="err_txt"></span>
      </section>
      
        <!-- 이메일 신형 -->
        <section class="email_wrap">
            <label for="email " >이메일</label>
            <div class="email_bt_wrap">
              <input id="email_id" name="email" class="n_border" type="text" placeholder="이메일에 @를 포함해주세요." />
              <button id="d_email" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
            </div>
            <span id="email_text_wrap"  class="err_txt"></span>
            <ul id="email_dns"  class="off_view ">
                <li><button type="button"><span class="dns_naver"></span>@<strong>nave.com</strong></button></li>
                <li><button type="button"><span class="dns_hanmail"></span>@<strong>hanmail.net</strong></button></li>
                <li><button type="button"><span class="dns_gmail"></span>@<strong>gmail.com</strong></button></li>
            </ul>
        </section>

        <section class="postal_wrap">
            <label for="ps_code">주소</label>
            <input type="text" name="ps_code" id="ps_code" class="n_border" placeholder="우편 번호"  readonly>
            <button id="postal_btn" type="button" >주소 검색</button>

            <!-- <label for="addr1">기본 주소</label> -->
            <input type="text" name="addr1" id="addr1" class="n_border" placeholder="기본 주소"  readonly>
            <!-- <label for="addr2">참고 항목</label> -->
            <input type="text" name="addr2" id="addr2" class="n_border" placeholder="참고 항목"  readonly>
            <!-- <label for="addr3">나머지 주소</label> -->
            <input type="text" name="addr3" id="addr3" class="n_border" placeholder="나머지 주소" maxlength="100">
            <button id="d_addr3" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
            <span id="addr_text_wrap"  class="err_txt"></span>
        </section>

        <section class="apply_wrap">
          <div class="inner_apply">
            <div class="apply_all_wrap">
              <input type="checkbox" name="apply_all" id="apply_all" value="y">
              <label class="apply_all_text" for="apply_all">약관 전체 동의</label>
              <span id="apply_all_text_wrap"  class="err_txt"></span>
            </div>
            <div class="apply_priv_wrap">
              <input type="checkbox" name="apply_priv" id="apply_priv" value="y">
              <label class="priv_text" for="apply_priv">[필수] 개인정보 수집 및 이용 동의 <button type="button">자세히</button></label>
            </div>
            <div class="apply_medie_wrap">
              <input type="checkbox" name="apply_medie" id="apply_medie" value="y">
              <label class="medie_text" for="apply_medie">[필수] 미디블 이용 약관 <button type="button">자세히</button></label>
            </div>
            <div class="apply_age_wrap">
              <input type="checkbox" name="apply_age" id="apply_age" value="y">
              <label class="age_text" for="apply_age">[필수] 만 14세 미만 가입 제한 <button type="button">자세히</button></label>
            </div>
            <div class="apply_marketing_wrap">
              <input type="checkbox" name="apply_marketing" id="apply_marketing" value="y">
              <label class="marketing_text" for="apply_marketing">[선택] 마케팅 활용 및 광고성 정보 수신 동의 <button type="button">자세히</button></label>
            </div>
            <span id="apply_text_wrap"  class="err_txt"></span>
          </div>
        </section>

        <section class="btn_area">
            <button id="join_btn" class="sign_off" type="submit" disabled >수정하기</button>
        </section>



        <!-- <fieldset>
            <legend>회원정보</legend>
            <input type="hidden" name="g_idx" value="<?php echo $array["idx"]; ?>">
            <p>
                이름 <?php echo $array["u_name"]; ?>
            </p>

            <p>
                아이디 <?php echo $array["u_id"]; ?>
            </p>

            <p>
                <label for="pwd">비밀번호</label>
                <input type="text" name="pwd" id="pwd">
                <br>* 비밀번호는 4~12글자만 입력할 수 있습니다.
            </p>

            <p>
                <label for="repwd">비밀번호 확인</label>
                <input type="text" name="repwd" id="repwd">
            </p>

            <p>
                <label for="mobile">전화번호</label>
                <input type="text" name="mobile" id="mobile" value="<?php echo $array["mobile"]; ?>">
                <br>* "-" 없이 숫자만 입력
            </p>

            <?php
                // 문자 치환 : str_replace
                // 변수 = str_replace("어떤 문자를", "어떤 문자로", "어떤 값에서");
                // DB에 입력된 YYYY-MM-DD 형식을 YYYYMMDD로 치환
                $birth = str_replace("-", "", $array["birth"]);
            ?>
            <p>
                <label for="birth">생년월일</label>
                <input type="text" name="birth" id="birth" value="<?php echo $birth; ?>">
                <br>ex)20221031
            </p>

            <?php
                // 문자 분리 : explode
                // 변수 = explode("기준문자", "어떤 값에서");
                // 변수가 배열처리되어 분리된 값 사용
                // DB에서 가져온 이메일을 @ 기준으로 분리
                $email = explode("@", $array["email"]);
            ?>
            <p>
                <label for="email_id">이메일</label>
                <input type="text" name="email_id" id="email_id" value="<?php echo $email[0]; ?>"> @
                <input type="text" name="email_dns" id="email_dns" value="<?php echo $email[1]; ?>">
                <select name="email_sel" id="email_sel" onchange="change_email()">
                    <option value="">직접입력</option>
                    <option value="naver.com">네이버</option>
                    <option value="hanmail.net">다음</option>
                    <option value="gmail.com">구글</option>
                </select>
            </p>

            <p>
                <label for="ps_code">주소</label>
                <input type="text" name="ps_code" id="ps_code" value="<?php echo $array["ps_code"]; ?>">
                <button type="text">주소검색</button><br>
                <label for="addr_b">기본주소</label>
                <input type="text" name="addr_b" id="addr_b" value="<?php echo $array["addr_b"]; ?>"><br>
                <label for="addr_d">상세주소</label>
                <input type="text" name="addr_d" id="addr_d" value="<?php echo $array["addr_d"]; ?>">
            </p>

            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">정보수정</button>
                <button type="button" onclick="mem_del()">회원탈퇴</button>
            </p>
        </fieldset> -->
    </form>
    </main>

    <!-- 푸터 영역 시작 -->

    <?php include "../inc/footer.php"; ?>

    <!-- 푸터 영역 종료 -->

</body>
</html>