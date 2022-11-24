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

  <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>

  <!-- 초기값 리셋 css -->
  <link rel="stylesheet" href="../css/reset.css">
  <!-- 회원 정보 css -->
  <link rel="stylesheet" href="../css/user_info.css">
  <!-- 애니메이션 css -->
  <link rel="stylesheet" href="../css/anime.css">
  <!-- 헤더 & 푸터 css -->
  <link rel="stylesheet" href="../css/header_and_footer.css">

  <!-- 회원 정보 js -->
  <script defer src="../js/user_info.js"></script>
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
      <li class="board_tab_on"><a href="./user_info.php">회원정보 수정</a></li>
      <li class="board_tab_off"><a href="./pwd_change.php">비밀번호 변경</a></li>
      <li class="board_tab_off"><a href="./user_delete.php">회원탈퇴</a></li>
    </ul>

    <form name="edit_form" action="edit_info.php" method="post" onsubmit="return edit_info_check()">
      <h5> 기본 정보 </h5>

      <table class="user_info_board">
          <caption>마이페이지 정보 수정</caption>

          <tr class="user_name_wrap">
              <th>이름</th>
              <td><p><?php echo $array["u_name"]; ?></p></td>
          </tr>
          <tr class="user_id_wrap">
              <th>아이디</th>
              <td><p><?php echo $array["u_id"]; ?></p></td>
          </tr>
          <tr class="user_pwd_wrap">
              <th>비밀번호</th>
              <td><a href="./pwd_change.php">변경</a></td>
          </tr>
          <tr class="user_birth_wrap">
              <th>생년월일</th>
              <td><p><?php echo $array["birth"]; ?></p></td>
          </tr>
          <tr class="user_mobile_wrap">
              <th><label for="mobile">연락처</label></th>
              <td class="mobile_readonly_wrap cg_off">
                <div class="mobile_cg_wrap">
                  <input class="now_mobile n_border" name="now_mobile" type="text" placeholder="<?php echo $array["mobile"]; ?>" value="<?php echo $array["mobile"]; ?>" readonly ></input>
                  <button class="mobile_cg_btn" type="button">변경</button>
                </div>
              </td>
              <td class="mobile_input_wrap cg_on">
                <div class="mobile_cg_wrap">
                    <input id="mobile" name="mobile" class="n_border" type="text" placeholder="휴대폰 번호 입력 (&#34;-&#34;제외 11자리 입력)" value="<?php echo $array["mobile"]; ?>">
                    <button id="d_mobile" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
                    <button class="mobile_cg_btn" type="button">취소</button>
                </div>
                <span id="mobile_text_wrap"  class="err_txt"></span>
              </td>
          </tr>
          <tr class="user_email_wrap">
              <th><label for="email">이메일</label></th>
              
              <td class="email_readonly_wrap cg_off">
               <div class="email_cg_wrap">
                <input class="now_email n_border" name="now_email" type="text" placeholder="<?php echo $array["email"]; ?>" value="<?php echo $array["email"]; ?>" readonly ></input>
                <button class="email_cg_btn" type="button">변경</button>
                </div>
              </td>

              <td class="email_input_wrap cg_on">
                <div class="email_cg_wrap">
                  <input id="email_id" name="email" class="n_border" type="text" placeholder="이메일에 @를 포함해주세요." value="<?php echo $array["email"]; ?>" />
                  <button id="d_email" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
                  <button class="email_cg_btn" type="button">취소</button>
                </div>
                <span id="email_text_wrap"  class="err_txt"></span>
              </td>

          </tr>

          <tr class="user_postal_wrap">
              <th><label for="ps_code">주소</label></th>
              <td>
                <section class="postal_bt_wrap">
                  <input type="text" name="ps_code" id="ps_code" class="n_border" placeholder="우편 번호" value="<?php echo $array["ps_code"]?>"  readonly>
                  <button id="postal_btn" type="button" >주소 검색</button>

                  <input type="text" name="addr1" id="addr1" class="n_border" placeholder="기본 주소" value="<?php echo $array["addr1"]?>"  readonly>
                  <input type="text" name="addr2" id="addr2" class="n_border" placeholder="참고 항목" value="<?php echo $array["addr2"]?>"  readonly>
                  <div class="addr3_readonly_wrap cg_off">
                    <input type="text" name="now_addr3" class="now_addr3 n_border" placeholder="나머지 주소" maxlength="100" value="<?php echo $array["addr3"]?>" readonly>
                    <button class="addr3_cg_btn" type="button">변경</button>
                  </div>
                  <div class="addr3_input_wrap cg_on">
                    <input type="text" name="addr3" id="addr3" class="n_border" placeholder="나머지 주소" maxlength="100" value="<?php echo $array["addr3"]?>">
                    <button id="d_addr3" class="off_view" type="button" title="입력한 내용 삭제"><i class="fa-solid fa-x"></i></button>
                    <button class="addr3_cg_btn" type="button">취소</button>
                  </div>
                  <span id="addr_text_wrap"  class="err_txt"></span>
                </section>
              </td>
          </tr>
      </table>
      <h5> 선택 정보 </h5>

      <table class="user_check_board">
        <caption>마이페이지 정보 수정</caption>
        <tr class="user_apply_wrap">
              <th>설빙 마케팅 정보 수신 동의</th>
              <td>
                <p>이벤트/상품 소식등을 전해드립니다.(공지목적의 발송되는 메일은 제외)</p>
                <div>
                  <input type="checkbox" name="apply_marketing" id="apply_marketing" value="y" <?php if($array["marketing"] == "y") echo "checked";?>>
                  <input type="hidden" name="apply_marketing" id="apply_marketing_hidden" value="n" >
                  <label class="marketing_text" for="apply_marketing">[선택] 마케팅 활용 및 광고성 정보 수신 동의 
                    <button type="button">자세히</button>
                  </label>
                </div>
              </td>
        </tr>
      </table>
      <div class="form_btn_wrap">
        <button type="button" onclick="history.back()" class="cancel_btn">취소</button>
        <button type="submit" class="edit_btn">수정</button>
      </div>
    </form>
    </main>

    <!-- 푸터 영역 시작 -->

    <?php include "../inc/footer.php"; ?>

    <!-- 푸터 영역 종료 -->

</body>
</html>