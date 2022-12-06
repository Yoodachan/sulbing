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
  <link rel="stylesheet" href="./css/reset.css">
  <!-- 메인 css -->
  <link rel="stylesheet" href="./css/index.css">
  <!-- 애니메이션 css -->
  <link rel="stylesheet" href="./css/anime.css">
  <!-- 헤더 & 푸터 css -->
  <link rel="stylesheet" href="./css/header_and_footer.css">

  <!-- Bx 슬라이더 -->
  <script defer src="./js/jquery.bxslider.js"></script>
  <!-- 메인 js -->
  <script defer src="./js/index.js"></script>
  <!-- 헤더 & 푸터 js -->
  <script defer src="./js/header_and_footer.js"></script>

  <title>설빙</title>
</head>
<body>

  <!-- 헤더 영역 시작 -->

    <!-- 가맹상담 배너 -->
  
    <div class="top_banner">
       <div class="top_link_wrap">
         <button class="top_link_btn" type="button"><i class="fa-solid fa-x"></i></button>
         <a class="top_link_ko1" href="#" title="국내 가맹점 문의 이동"></a>
         <a class="top_link_ko2" href="./images/img_01.png" download title="회사 소개서 다운로드"></a>
         <a class="top_link_en" href="#" title="해외 가맹점 문의 이동"></a>
       </div>
    </div>
  
    <!-- GNB 불러오기 -->
  
    <?php include "inc/header_index.php"; ?>
  

    <!-- 스크롤 모델 -->
    <div class="quick_wrap">
      <a href="#" class="quick_model quick_off" title="상담/문의 이동"></a>
    </div>
  
  
    <!-- 스크롤 버튼 -->
  
    <button type="button" class="top_on top_scale_off">
      <i class="fa-solid fa-chevron-up"></i>
    </button>


  <!-- 헤더 영역 종료 -->



<!-- 콘텐트 영역 시작 -->
<section class="content">

  <!-- 입점후보 팝업 -->

  <article id="popup_wrap">
    <div class="pop_banner">
    <div class="pop_img"></div>
      <button type="button" class="pop_btn"><i class="fa-solid fa-x"></i></button>
      <form action="">
        <input type="checkbox">
        <p>오늘은 그만보기</p>
      </form>
    </div>
  </article>

  <!-- 슬라이드 배너 -->

  <div class="banner_wrap">
    <div class="banner_list">
      <div class="banner_item bn_item_01"> <a href="#"></a> </div>
      <div class="banner_item bn_item_02"> <a href="#"></a> </div>
      <div class="banner_item bn_item_03"> <a href="#"></a> </div>
      <div class="banner_item bn_item_04"> <a href="#"></a> </div>
      <div class="banner_item bn_item_05"> <a href="#"></a> </div>
    </div>
    <button class="bn_prev" type="button" title="prev"><i class="fa-sharp fa-solid fa-chevron-left"></i></button>
    <button class="bn_next" type="button" title="next"><i class="fa-sharp fa-solid fa-chevron-right"></i></button>
    <div class="bn_pager_wrap">
      <div class="bn_pager_list">
        <span class="bn_text_wrap">
          <p class="bn_text_now"></p>  <p class="bn_text_all"></p>
        </span>
        <button class="bn_stop" type="button"><i id="bn_simbol" class="fa-solid fa-pause"></i></button>
      </div>
    </div>
  </div>

  <!-- 메뉴 소개 슬라이드 -->

  <div class="product_wrap">
    <div class="product_wrap_inner">
      <div class="product_list">
        <div class="new_product_wrap">
            <h2 class="new_product_cate">NEW</h2>
            <div class="new_item">
              <a class="new_item_link" href="#">
                <span class="new_item_img" title="스윗캔디구슬설빙 이미지"></span>
                <strong class="new_item_title">스윗캔디구슬설빙</strong>
              </a>
            </div>
        </div>


        <div class="product_slider">
          <h2 class="product_slider_cate">HOT</h2>
          
          <div class="hot_item_wrap">
            <div class="hot_item_list">
              <div class="product">
                <a class="hot_item_link" href="#">
                  <span class="product_slider_img hot_item_01"></span>
                  <strong class="hot_item_title">통통새우볶음밥</strong>
                </a>
              </div>

              <div class="product">
                <a class="hot_item_link" href="#">
                  <span class="product_slider_img hot_item_02"></span>
                  <strong class="hot_item_title">콜드브루라떼</strong>
                </a>
              </div>

              <div class="product">
                <a class="hot_item_link" href="#">
                  <span class="product_slider_img hot_item_03"></span>
                  <strong class="hot_item_title">콜드브루아메리카노</strong>
                </a>
              </div>

              <div class="product">
                <a class="hot_item_link" href="#">
                  <span class="product_slider_img hot_item_04"></span>
                  <strong class="hot_item_title">킹망고설빙</strong>
                </a>
              </div>

              <div class="product">
                <a class="hot_item_link" href="#">
                  <span class="product_slider_img hot_item_05"></span>
                  <strong class="hot_item_title">반숙김치볶음밥</strong>
                </a>
              </div>
            </div>
            <button class="hot_item_prev" type="button">
              <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="hot_item_next" type="button">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="menu_bottom">
        <div class="bottom_left">
          <a href="#"></a>
          <p>BRAND STORY</p>
        </div>
        <div class="bottom_right">
          <ul>
            <li class="menu_1"><a href="#">설빙</a></li>
            <li class="menu_2"><a href="#">프리미엄 시즌 설빙</a></li>
            <li class="menu_3"><a href="#">열매음료</a></li>
            <li class="menu_4"><a href="#">라떼</a></li>
            <li class="menu_5"><a href="#">스무디</a></li>
            <li class="menu_6"><a href="#">커피</a></li>
            <li class="menu_7"><a href="#">디저트</a></li>
            <li class="menu_8"><a href="#">MD</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>



  <div class="youtube_wrap">
    <h3>설빙 브랜드 영상</h3>
    <iframe src="https://www.youtube.com/embed/zcw-mDsJ_X4?autoplay=1&mute=1" title="설빙 CF 영상" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
    </iframe>
  </div>



  <div class="event_wrap">
    <div class="event_inner">
      <div class="event_top">
        <div class="event_top_left">
          <h4>EVENT</h4>
          <div class="event_banner">
            <strong>종료된 이벤트 입니다.</strong>
          </div>
        </div>
        <div class="event_top_right">
          <h4>NEWS & NOTICE</h4>
          <ul>
            <li class="top_notice">
              <div class="notice_img">
                <img src="./images/notice_01.png">
              </div>
              <div class="notice_text">
                <p>Notice</p>
                <h5>설빙 X 꽃카 세트 이벤트</h5>
                <em>2022-06-27</em>
              </div>
              
            </li>
            <li class="bottom_notice">
              <div class="notice_img">
                <img src="./images/notice_02.png">
              </div>
              <div class="notice_text">
                <p>Notice</p>
                <h5>생딸기가득 생크림케이...</h5>
                <em>2021-12-07</em> 
              </div>
            </li>
          </ul>
        </div>
      </div>
  

  
      <div class="event_bottom">
        <div class="event_bottom_left">
          <div class="main_store_box store">
            <h3>
              <span class="store_text_1">매</span>
              <span class="store_text_2">장</span>
              <span class="store_text_3">찾</span>
              <span class="store_text_4">기</span>
            </h3>
            <form action="">
              <input type="text" placeholder="매장명 검색">
              <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
              <select class="select_local">
                <option>시도</option>
                <option>서울</option>
              </select>
              <select class="select_region" value="서울">
                <option></option>
                <option>강남구</option>
                <option>강동구</option>
                <option>강북구</option>
                <option>강서구</option>
                <option>관악구</option>
                <option>광진구</option>
                <option>구로구</option>
                <option>금천구</option>
                <option>노원구</option>
                <option>도봉구</option>
                <option>동대문구</option>
                <option>동작구</option>
                <option>마포구</option>
                <option>서대문구</option>
                <option>서초구</option>
                <option>성동구</option>          
                <option>성북구</option>
                <option>송파구</option>
                <option>양천구</option>
                <option>영등포구</option>
                <option>용산구</option>
                <option>은평구</option>
                <option>종로구</option>
                <option>중구</option>
                <option>중랑구</option>
              </select>
              <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
        </div>
        <div class="event_bottom_right">
          <div class="main_store_box franchise">
            <h3>
              <span class="franchise_text_1">창</span>
              <span class="franchise_text_2">업</span>
              <span class="franchise_text_3">안</span>
              <span class="franchise_text_4">내</span>
            </h3>
            <a href="#">
              <span>
                <p>가맹점주와 본사가 상생할 수 있는</p>
                <p>설빙에서 당신이 꿈꾸는 창업의 문을</p>
                <p>힘차게 열어보세요.</p>
              </span>
              <strong>
                <p>자세히 알아보기</p>
                <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
              </strong>
            </a>
          </div>
        </div>
      </div>  
    </div>
  </div>

  <div class="main_sns_wrap">
    <div class="sns_inner">
      <h3>설빙 SNS</h3>

      <div class="main_sns_icon">
        <a class="instagram" href="https://www.instagram.com/sulbing.official/"><i class="fa-brands fa-instagram"></i></a>
        <a class="facebook" href="https://www.facebook.com/sulbing"><i class="fa-brands fa-facebook"></i></a>
        <a class="youtube" href="https://www.youtube.com/@user-cz1no6iw9k"><i class="fa-brands fa-youtube"></i></a>
      </div>

      <div class="main_sns_banner">
        <a href="#" class="sns_banner_1">
          <img src="./images/style_bottom_img_01.png">
          <div>
            <strong>
              #EVENT
              🎃𝙏𝙍𝙄𝘾𝙆 𝙊𝙍 𝙈𝙄𝙕🎃
              ⠀
              당신은 수상할 정도로
              미쯔가 듬~뿍 들어간
              #미쯔초코설빙 과 마주쳤습니다.
              ⠀
              미쯔초코설빙을 속일 할로윈 분장을
              댓글로 남기고 조심~히 지나가면
              바삭바삭한 할로윈을 보낼 기회가 찾아옵니다.
              ⠀
              👻반드시 할로윈이 지나기 전에
              댓글 남기기에 성공해야 합니다…👻
              ⠀
              가장 많은 좋아요❤를 받은 5명에겐
              💀설빙 모바일 상품권 5천원권의 기회까지💀
              ⠀
              ▶참여 방법
              1. 설빙 인스타그램 팔로우하기
              2. 할로윈에 하고 싶은 분장을 댓글로 남기기
              ❗ 친구를 태그하면 당첨 확률 UP!
              ⠀
              ▶이벤트 기간 : 10/26(수)~10/31(월)
              ▶당첨자 발표 : 11/10(목)
              ▶경품 및 당첨 인원 : 미쯔 블랙 1박스(84g*16개입) - 10명
              ❗ 가장 많은 좋아요를 받은 참여자 중 5명은 설빙 모바일 상품권 5천원권 추가 증정ː̗̀(ꙨꙨ)ː̖́
            </strong>
          </div>
        </a>
        <a href="#" class="sns_banner_2">
          <img src="./images/style_bottom_img_02.png">
          <div>
            <strong>
              찬바람이 뺨을 스치는 오늘🍂
              따끈~한 디저트가 생각난다면?
              ⠀
              고소한 치즈가 쭈~욱
              옥수수가 입에서 톡톡!
              #피자붕어빵 이 #설빙 에 나타났다👀
              ⠀
              한입에 쏙! 넣어 즐기는
              ⭐ 고소짭짤한 맛 ⭐
              #한입쏙붕어빵 #피자 맛을
              지금 전국 설빙에서 만나 보세요⌯'▾'⌯
            </strong>
          </div>
        </a>
        <a href="#" class="sns_banner_3">
          <img src="./images/style_bottom_img_03.png">
          <div>
            <strong>
              #EVENT
              📢매월 22일은 22% 설빙데이📢
              ⠀
              10월에도 만나보는 큰 혜택🎇
              설빙몰 22% 할인도 받고
              게임도 참여해서 선물 받아가세요🎁
              ⠀
              💙 설빙 미로찾기 이벤트 💙
              설동이가 별동이를 만날 수 있도록 도와주세요!
              설빙 미로를 탈출하며 찾은 글자를 차례로 맞춰주세요🤗
              ⠀
              정답을 댓글에 남겨 주신 분들 중,
              추첨을 통해 설빙 ‘추억의 붕어빵' 을
              선물로 드립니다🎁
              ⠀
              ☘참여방법
              ① “설빙몰” 알림받기 (당첨시 DM으로 캡처 이미지 전달)
              ② 미로 속 글자 찾아서 댓글로 작성
              (태그하는 친구가 많을 수록 당첨 확률 UP!)
              ⠀
              ✔ 이벤트 기간 : 2022년 10월 22일 오전 10시 ~ 10월 24일 오전 10시까지
              ✔ 당첨 인원 : 10명
              ✔ 당첨 상품 : 설빙 추억의 붕어빵
              ⠀
              ❗ 주의사항 ❗
              설빙몰 스토어 알림 받기를 해주셔야 합니다.
              정보 회신 기한 내 당첨자 정보를 전달주시지 않을 경우, 당첨이 취소될 수 있습니다
              ⠀
              ⠀
              ⠀
              #설빙몰 #설빙 #설빙온라인몰 #설빙이벤트 #설빙몰_이벤트 #이벤트 #EVENT #설빙데이 #설빙22데이 #22프로할인 #이벤트그램 #붕어빵 #설빙붕어빵 #추억의붕어빵 #설빙추억의붕어빵
            </strong>
          </div>
        </a>
        <a href="#" class="sns_banner_4">
          <img src="./images/style_bottom_img_04.png">
          <div>
            <strong>
              #EVENT
              그 시절 내가 제일 좋아했던 설빙🍨
              설렘이들의 PICK으로
              #스윗캔디구슬설빙 이 돌아왔어✨
              ⠀
              기다렸던 설렘이…
              ❗모두 집중❗
              ⠀
              구슬 아이스크림에
              머랭 쿠키까지 콕콕♪( 'ω' و(و"
              ⠀
              입에서 사르르 녹는 달달함🌟을
              한 번 멀~리 퍼트려 볼까😉?
              ⠀
              ▶참여 방법
              1. 설빙 인스타그램 팔로우하기
              2. 피드에 이벤트 게시글 공유하기
              3. 이벤트 게시글에 참여 댓글(url) 남기기
              * 친구를 태그하면 당첨 확률 UP!
              ⠀
              ▶이벤트 기간 : 10/19(수)~10/31(월)
              ▶당첨자 발표 : 11/8(화)
              ▶경품 및 당첨 인원 : 설빙 모바일 상품권 5천원권 - 20명
              ⠀
              ※ 스윗캔디구슬설빙 출시일은 10월 20일 입니다.
            </strong>
          </div>
        </a>
        <a href="#" class="sns_banner_5">
          <img src="./images/style_bottom_img_05.png">
          <div>
            <strong>
              #로투스
              𝗩𝗦
              #구슬아이스크림
              그 승자는?!
              ⠀
              𝙒𝙄𝙉𝙉𝙀𝙍 𝙄𝙎 𝘾𝙊𝙈𝙄𝙉𝙂!
              ⠀
              부드럽게 녹아내리는 달콤함!
              🥇 #스윗캔디구슬설빙 🥇
              ⠀
              #재출시 를 위한 소중한 한 표💦
              투표해주신 모든 설렘이에게 감사합니다😉
              ⠀
              한 발짝 가까워진 출시를 기다리며
              오늘도… #설빙🍨 갈까?
            </strong>
          </div>
        </a>
        <a href="#" class="sns_banner_6">
          <img src="./images/style_bottom_img_06.png">
          <div>
            <strong>
              맛있는 건 먹고 싶지만
              나가기 귀찮은 오늘
              어떻게 해야 할지 고민이라면?
              ⠀
              고민은 주문을 늦출 뿐!
              이제 #배달 로 집에서도 #설빙 하자💝
            </strong>
          </div>
        </a>
      </div>     
    </div>
  </div>
</section>

<!-- 푸터 영역 시작 -->

<?php include "inc/footer.php"; ?>

<!-- 푸터 영역 종료 -->


</body>
</html>