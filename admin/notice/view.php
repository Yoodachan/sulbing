<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 데이터 가져오기
$n_idx = $_GET["n_idx"];


// 테이블 이름
$table_name = "notice";

// 쿼리 작성
$sql = "select * from $table_name where idx=$n_idx;";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);

// 조회수 업데이트
$cnt = $array["cnt"]+1;

$sql = "update $table_name set cnt = $cnt where idx = $n_idx;";

mysqli_query($dbcon, $sql);

$w_date = substr($array["w_date"], 0, 10);


$prev_page = ($array["idx"]-1);


$next_page = ($array["idx"]+1);

// echo $array["n_title"];
// exit;


// $total = "select count(*) as idx from $table_name;";
// echo $total;
// exit;

// $total_cnt = mysqli_query($dbcon, $total);
// echo $total_cnt;
// exit;

// $total_wrap = mysqli_num_rows($total_cnt);

// if($next_page > $total_wrap){
//     $next_page = $total_wrap;
// };



// 현재 페이지 기준 이전 페이지 제목 가져와서 sql에 넣기
// $sql = "select n_title from notice where idx = $prev_page;";
// $prev = mysqli_query($dbcon, $sql);
// echo $prev;
// exit;

// $sql = "select count(*) from notice;";

// $nt_cnt = mysqli_query($dbcon, $sql);
// echo $nt_cnt;
// exit;





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
  <!-- 뉴스&공지사항 내부 css -->
  <link rel="stylesheet" href="../../css/view_notice_admin.css">
  <!-- 애니메이션 css -->
  <link rel="stylesheet" href="../../css/anime.css">
  <!-- 헤더 & 푸터 css -->
  <link rel="stylesheet" href="../../css/header_and_footer.css">

  <!-- 뉴스&공지사항 js -->
  <script defer src="../../js/view_notice_admin.js"></script>
  <!-- 헤더 & 푸터 js -->
  <script defer src="../../js/header_and_footer.js"></script>

    <title> 뉴스&공지사항 상세 | 설빙 </title>

</head>


<body>

    <!-- 헤더 영역 시작 -->

    <?php include "../../inc/header_ns.php"; ?>

    <!-- 헤더 영역 종료 -->

    <!-- 콘텐트 영역 시작 -->

    <section class="title_wrap">
    <div class="common_title">
      <div class="inner_title drop_down_off">
        <span class="title_left left_move_off"></span>
        <h2 class="title_text"><a href="./list_all.php">뉴스 & 공지사항 상세</a></h2>
        <span class="title_right right_move_off"></span>
      </div>

      <ul class="location">
        <li><a href="./Sulbing_index_유다찬.html">홈</a></li>
        <li><p>뉴스 & 공지사항 상세</p></li>
      </ul>
    </div>
  </section>

    <table class="notice_list_set">
        <thead>
        <tr class="notice_list_title">
            <th class="v_title">
                <h2 title="제목">
                    <?php 
                        if($array["cate"] == ""){
                            echo "[전체] ";
                        } else if($array["cate"] == "news"){
                            echo "[뉴스] ";
                        } else if($array["cate"] == "notice"){
                            echo "[공지] "; 
                        };
                        echo $array["n_title"]; 
                    ?>
                </h2>
                <span><?php echo $w_date; ?></span>
                <div class="sns_link">
                    <a class="link_kakaostory" href="https://accounts.kakao.com/login/?continue=https://story.kakao.com">
                        <p>카카오스토리</p>
                    </a>
                    <a class="link_kakao" href="https://www.kakaocorp.com/page/service/service/KakaoTalk">
                        <p>카카오</p>
                    </a>
                    <a class="link_facebook" href="https://ko-kr.facebook.com">
                        <p>페이스북</p>
                    </a>
                </div>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class="notice_view_content">
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
        </tbody>
    </table>
    <div class="notice_list">
      <a class="notice_list_btn btn_submit" href="modify.php?n_idx=<?php echo $array["idx"]; ?>">수정</a>
      <a class="notice_list_btn" href="list_all.php">목록</a>
      <a class="notice_list_btn btn_del" href="delete.php?n_idx=<?php echo $array["idx"]; ?>">삭제</a>
    </div>


    <ul class="notice_list_nav">
        <li class="notice_list_prev">
            <a href="view.php?n_idx=<?php echo $prev_page; ?>">
                <span>
                    <strong>
                        <i class="fa-solid fa-chevron-up"></i>
                        이전글
                    </strong>
                    <?php $prpg_title ?>
                </span>
            </a>
        </li>
        <li class="notice_list_next">
            <a href="view.php?n_idx=<?php echo $next_page; ?>">
                <span>
                    <strong>
                        <i class="fa-solid fa-chevron-down"></i>
                        다음글
                    </strong>
                    <?php $nxpg_title ?>
                </span>
            </a>
        </li>
    </ul>


<!-- 이전페이지는 1보다 작을 수 없다.

다음페이지 <  전체 페이지보다 클 수 없다. -->

    <!-- 콘텐트 영역 종료 -->

    <!-- 푸터 영역 시작 -->

    <?php include "../../inc/footer.php"; ?>

    <!-- 푸터 영역 종료 -->

</body>

</html>