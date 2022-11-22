<?php 
include "../inc/session.php"; 
include "../inc/admin_check.php";

// 데이터 가져오기
$n_idx = $_GET["n_idx"];

// DB 연결
include "../inc/dbcon.php";

// 테이블 이름
$table_name = "notice";

// 쿼리 작성
// $sql = "select * from notice where idx = $n_idx;";
$sql = "select * from $table_name where idx = $n_idx;";


// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);

// DB 종료
mysqli_close($dbcon);
?>





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
  <link rel="stylesheet" href="../../css/reset.css">
  <!-- 뉴스&공지사항 css -->
  <link rel="stylesheet" href="../../css/modify_notice.css">
  <!-- 애니메이션 css -->
  <link rel="stylesheet" href="../../css/anime.css">
  <!-- 헤더 & 푸터 css -->
  <link rel="stylesheet" href="../../css/header_and_footer.css">

  <!-- 뉴스&공지사항 js -->
  <script defer src="../../js/modify_notice.js"></script>
  <!-- 헤더 & 푸터 js -->
  <script defer src="../../js/header_and_footer.js"></script>

    <title> 뉴스&공지사항 수정 | 설빙 </title>
</head>
<body>

    <!-- 헤더 영역 시작 -->

    <?php include "../inc/header_ns.php"; ?>

    <!-- 헤더 영역 종료 -->

    <!-- 타이틀 영역 시작 -->

    <section class="title_wrap">
      <div class="common_title">
        <div class="inner_title drop_down_off">
          <span class="title_left left_move_off"></span>
          <h2 class="title_text"><a href="../../index.php">뉴스&공지사항 수정</a></h2>
          <span class="title_right right_move_off"></span>
        </div>
        <ul class="location">
          <li><a href="./Sulbing_index_유다찬.html">홈</a></li>
          <li><p>뉴스&공지사항 수정</p></li>
        </ul>
      </div>
    </section>

    <!-- 타이틀 영역 종료 -->

    <!-- 콘텐츠 영역 시작 -->

    <form name="notice_form" action="edit.php?n_idx=<?php echo $n_idx; ?>" method="post" enctype="multipart/form-data" onsubmit="return notice_check()">
        <table class="notice_modify_board">
            <caption>뉴스&공지사항 수정</caption>

            <tr class="notice_cate_wrap">
                <th><label for="cate">카테고리</label></th>
                <td>
                    <div class="cate_news_btn">
                    <span>
                    <i class="fa-solid fa-check"></i>
                        뉴스
                    </span>
                    <input id="n_cate_news" type="hidden" name="cate" value="news" <?php if($array["cate"] == "news") echo "checked"; ?>>
                    </div>

                    <div class="cate_notice_btn">
                    <span>
                    <i class="fa-solid fa-check"></i>
                        공지
                    </span>
                    <input id="n_cate_notice" type="hidden" name="cate" value="notice" <?php if($array["cate"] == "notice") echo "checked"; ?>>
                    </div>
                </td>
            </tr>

            <tr class="notice_title_wrap">
                <th><label for="n_title">제목</label></th>
                <td><input type="text" name="n_title" id="n_title" value="<?php echo $array["n_title"]; ?>"></td>
            </tr>

            <tr class="notice_content_wrap">
            <td colspan="2" class="v_text">
            <?php
            if($array["f_name"] && substr($array["f_type"], 0, 5) == "image"){
                $f_name = $array["f_name"];
                echo "
                    <p>
                        <img src=\"../../data/$f_name\" alt=\"\">
                    </p>
                ";
            };
            ?>
            <?php 
            // textarea의 엔터를 br로 변경
            // str_repalce("어떤 문자를", "어떤 문자로", "어떤 값에서");
            $n_content = str_replace("\n", "<br>", $array["n_content"]);
            $n_content = str_replace(" ", "&nbsp;", $n_content);
            echo $n_content; 
            ?>
            </td>
            </tr>
            <tr class="notice_file_wrap">
                <th>
                    <p> 첨부파일 </p>
                </th>

                <td>
                <!-- 파일 업로드 인풋 -->
                <label for="up_file" id="up_file_btn">
                <span>파일 업로드</span>
                <input type="file" name="up_file" id="up_file">
                </label>

                <!-- 파일이 있을 경우 -->
                <?php if($array["f_name"]){ ?>


                <div class="file_wrap">
                <!-- 파일명 -->
                <p class="file_name"> <?php echo $array["f_name"]; ?> <p>
                <!-- 파일 삭제 -->
                <input id="file_del" type="checkbox" name="file_del">
                </div>


                <?php } else { ?>    

                <div class="file_wrap">
                <!-- 파일명 -->
                <p class="file_name"><p>
                </div>   

                <?php } ?>
                </td>
            </tr>
        </table>

        <div class="notice_list">
        <a class="notice_list_btn btn_prev" href="view.php?n_idx=<?php echo $array["idx"]; ?>">이전</a>
        <button class="notice_list_btn btn_submit" type="submit">수정</button>
        </div>

    <!-- 콘텐츠 영역 종료  -->  
    
    <!-- 푸터 영역 시작 -->

    <?php include "../../inc/footer.php"; ?>

    <!-- 푸터 영역 종료 -->

</body>
</html>