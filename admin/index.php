<?php

include "../inc/session.php";

if($s_id != "admin"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href = \"http://localhost/web_project/admin/login/login.php\";
        </script>
    ";
exit;
};



?>
<!DOCTYPE html>
<html lang="ko">
<head>
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
    <link rel="stylesheet" href="../css/reset.css">
    <!-- 메인 어드민 css -->
    <link rel="stylesheet" href="../css/index_a.css">
    <!-- 애니메이션 css -->
    <link rel="stylesheet" href="../css/anime.css">
    <!-- 헤더 & 푸터 css -->
    <link rel="stylesheet" href="../css/header_and_footer.css">


    <!-- 메인 어드민 js -->
    <script defer src="../JS/index_a.js"></script>
    <!-- 헤더 & 푸터 js -->
    <script defer src="../JS/header_and_footer.js"></script>

    <title>설빙 | 관리자 페이지</title>
</head>

<body>
    <nav class="side_bar bar_on">

        <h1 class="logo_wrap" title="로고">
            <a href="../index.php">
                <span class="logo_img" title="로고 이미지">
                </span>
            </a>
        </h1>

        <ul class="bar_menu_wrap">

            <li class="admin_label">
                <a href="index.php">관리자 페이지</a>
            </li>

            <li class="user_label">
                <button type="button" class="user_menu_wrap">
                <span>사용자 관리</span>
                <i class="fa-solid fa-caret-up"></i>
                <i class="fa-solid fa-caret-down"></i>
                </button>
                
                <ul class="user_menu_inner">
                    <li>
                        <a href="">사용자 목록</a>
                    </li>
                </ul>
            </li>

            <!-- <li class="board_label"><span>게시판 관리</span>
                <i class="fa-solid fa-caret-down"></i>
                <ul class="board_menu">
                    <li><a href="">
                        공지사항 목록
                        </a>
                    </li>

                    <li><a href="">
                        게시판 목록
                        </a>
                    </li>
                </ul>
            </li> -->
        </ul>
    </nav>


    <div class="gnb">
        <ul class="nav_admin">
            <li class="nav_title"><a href="index.php">관리자 페이지</a></li>

            <li >
                <div class="btn_wrap"> 
                    <a class="admin_add_btn" href="members/list.php">사용자 추가</a>
                    <a class="logout_btn" href="members/list.php">로그아웃</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="gnb_bottom margin_on">
            <span class="nav_menu_btn"><i class="fa-solid fa-bars"></i></span>
    </div>
</body>

</html>