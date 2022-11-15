<?php
include "../inc/session.php";

// 데이터 가져오기
$b_idx = $_GET["b_idx"];

// 테이블 이름
$table_name = "board";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from $table_name where idx=$b_idx;";
/* echo $sql;
exit; */

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);

// 조회수 업데이트
$cnt = $array["cnt"]+1;
/* echo $cnt;
exit; */
$sql = "update $table_name set cnt = $cnt where idx = $b_idx;";
/* echo $sql;
exit; */
mysqli_query($dbcon, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <style>
        body{font-size:20px}
        a{text-decoration:none;margin:0 5px}
        table, td{border-collapse:collapse}
        th, td{padding:10px}
        .board_list_set{width:860px}
        .board_list_title{
            border-top:2px solid #999;
            border-bottom:1px solid #999
        }
        .board_view_content{border-bottom:1px solid #999}
        .board_view_text{border-bottom:2px solid #999;}
        .v_title{width:60px;background:#eee}
        .v_content{width:500px;text-align:left;padding-left:20px}

        .list{width:860px;text-align:center}

        a:hover{color:rgb(255, 128, 0)}

        .write_area{
            width:860px;
            display:flex;
            flex-direction:row-reverse
        }
    </style>
    <script>
        function edit_board(){
            var pwd = document.getElementById("b_pwd");
            if(!pwd.value){
                alert("비밀번호를 입력하세요.");
                pwd.focus();
                return false;
            } else{
                document.board_form.submit();
            };
        };
        function remove_board(){
            var pwd = document.getElementById("b_pwd");
            if(!pwd.value){
                alert("비밀번호를 입력하세요.");
                pwd.focus();
                return false;
            } else{
                var ck = confirm("정말 삭제하시겠습니까?");
                if(ck){
                    location.href="delete.php?b_idx=<?php echo $b_idx; ?>";
                };
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>
    <!-- 콘텐트 -->
    <h2>게시판</h2>
    <?php if($s_id == "admin"){ ?>
    <p class="write_area">
        <span><a href="write.php">[글쓰기]</a></span>
    </p>
    <?php }; ?>
    <form name="board_form" action="modify.php?b_idx=<?php echo $b_idx; ?>" method="post">
    <table class="board_list_set">
        <tr class="board_list_title">
            <th class="v_title">작성자</th>
            <td class="v_content"><?php echo $array["b_name"]; ?></td>
        </tr>

        <tr class="board_list_title">
            <th class="v_title">비밀번호</th>
            <td class="v_content">
                <input type="text" name="b_pwd" id="b_pwd">
            </td>
        </tr>

        <tr class="board_view_content">
            <th class="v_title">날짜</th>
            <td class="v_content">
            <?php echo ($array["w_date"]); ?>
            </td>
        </tr>

        <tr class="board_view_content">
            <th class="v_title">제목</th>
            <td class="v_content"><?php echo $array["b_title"]; ?></td>
        </tr>
        
        <tr class="board_view_content">
            <th class="v_title">조회수</th>
            <td class="v_content"><?php echo $cnt; ?></td>
        </tr>
        <tr class="board_view_text">
            <td colspan="2" class="v_text">
            <?php 
            $b_content = str_replace("\n", "<br>", $array["b_content"]);
            $b_content = str_replace(" ", "&nbsp;", $b_content);
            echo $b_content; 
            ?>
            </td>
        </tr>
    </table>
    </form>
    <p class="list">
        <a href="list.php">[목록]</a>
        <a href="#" onclick="edit_board()">[수정]</a>
        <a href="#" onclick="remove_board()">[삭제]</a>
    </p>
</body>
</html>