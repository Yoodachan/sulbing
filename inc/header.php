  <!-- 헤더 영역 시작 -->

  <?php include "session.php"; ?>

  <!-- 헤더 영역 종료 -->
  
<div class="head_top">
    <div class="head_inner">
      <div class="language_wrap">
        <p title="구글 아이콘"></p>
        <select>
          <option>언어 선택</option>
          <option>kor only</option>
        </select>
      </div>

      <div class="seach_wrap">
        <form action="#">
          <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
          <input type="text" placeholder="검색어를 입력해주세요">
        </form>
      </div>


      <ul class="head_menu">
      <?php if(!$s_idx){ ?>
        <li class="login_menu"><a href="http://localhost/web_project/login/login.php">로그인</a></li>
        <li class="join_menu"><a href="http://localhost/web_project/members/join.php">회원가입</a></li>
      <?php } else if($s_id == "admin"){ ?>
        <li class="admin_page"><a href="http://localhost/web_project/admin/index.php">관리자 페이지</a></li>
        <li class="logout"><a href="http://localhost/web_project/login/logout.php">로그아웃</a></li>
        <li class="user_info"><a href="http://localhost/web_project/members/user_info.php">마이페이지</a></li>
        <?php } else{ ?>
        <li class="logout"><a href="http://localhost/web_project/login/logout.php">로그아웃</a></li>
        <li class="user_info"><a href="http://localhost/web_project/members/user_info.php">마이페이지</a></li>
        <?php }; ?>
        <li class="user_help"><a href="#">고객센터</a></li>
      </ul>


    </div>
    <div class="GNB">
      <nav class="gnb_box">
        <h1 id="logo">
          <a href="http://localhost/web_project/index.php">설빙</a>
        </h1>
        <ul class="gnb_list">
          <li><a href="#">브랜드</a></li>
          <li><a href="#">메뉴</a></li>
          <li><a href="#">이벤트</a></li>
          <li><a href="#">게시판</a></li>
          <li><a href="#">매장찾기</a></li>
          <li><a href="#">프랜차이즈</a></li>
        </ul>
        <div class="gnb_sns">
          <div class="sns_list">
            <a class="instagram" href="#"><i class="fa-brands fa-instagram"></i></a>
            <a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a>
            <a class="youtube" href="#"><i class="fa-brands fa-youtube"></i></a>
            <a class="tiktok" href="#"><i class="fa-brands fa-tiktok"></i></a>
          </div>
        </div>
      </nav>
    </div>
    <div class="GNB_menu">
      <div class="gnb_menu_wrap">
        <div class="gnb_model">
          <p title="홍보 모델"></p>
        </div>
        <ul class="gnb_menu_list">
          <li>
            <ul class="gnb_brand">
              <li><a href="#">브랜드</a></li>
              <li><a href="#">설빙 광고/영상</a></li>
              <li><a href="#">뉴스&공지사항</a></li>
            </ul>
          </li>
    
          <li>
            <ul class="gnb_product">
              <li><a href="#">신제품</a></li>
              <li><a href="#">설빙</a></li>
              <li><a href="#">디저트</a></li>
              <li><a href="#">음료</a></li>
              <li><a href="#">MD</a></li>
            </ul>
          </li>
    
          <li>
            <ul class="gnb_event">
              <li><a href="#">이벤트</a></li>
              <li><a href="#">e쿠폰</a></li>
            </ul>
          </li>
    
          <li>
            <ul class="gnb_board">
              <li><a href="#">자유 게시판</a></li>
            </ul>
          </li>
    
          <li>
            <ul class="gnb_store">
              <li><a href="#">매장찾기</a></li>
            </ul>
          </li>
    
          <li>
            <ul class="gnb_franchisee">
              <li><a href="#">국내 가맹점 개설 안내</a></li>
              <li><a href="#">해외 가맹점 개설 안내</a></li>
            </ul>
          </li>
    
        </ul>
        <div class="gnb_right">
        </div>
      </div>
    </div>
  </div>
</div>