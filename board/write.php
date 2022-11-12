<?php 
include "../inc/session.php"; 
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <style>
        body,input,button,textarea, select, option{font-size:20px}
        input[type=checkbox]{width:20px;height:20px}
        a{text-decoration:none;margin:0 5px}
        fieldset{border:0 none}
        legend{display:none}
        .cate{width:200px}
    </style>
    <script>
        function board_check(){
            var b_name = document.getElementById("b_name");
            var b_pwd = document.getElementById("b_pwd");
            var b_title = document.getElementById("b_title");
            var b_content = document.getElementById("b_content");

            if(!b_name.value){
                alert("이름을 입력하세요.");
                b_name.focus();
                return false;
            };

            if(!b_pwd.value){
                alert("비밀번호를 입력하세요.");
                b_pwd.focus();
                return false;
            };

            if(!b_title.value){
                alert("제목을 입력하세요.");
                b_title.focus();
                return false;
            };

            if(!b_content.value){
                alert("내용을 입력하세요.");
                b_content.focus();
                return false;
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>
    <form name="board_form" action="insert.php" method="post" onsubmit="return board_check()">
        <fieldset>
            <legend>게시판</legend>
            <p>
                <label for="b_name">이름</label>
                <input type="text" name="b_name" id="b_name">
            </p>
            
            <p>
                <label for="b_pwd">비밀번호</label>
                <input type="text" name="b_pwd" id="b_pwd">
            </p>

            <p>
                <label for="cate">카테고리</label>
                <select name="cate" id="cate" class="cate">
                    <option value="normal">일반</option>
                    <option value="music">음악</option>
                    <option value="movie">영화</option>
                </select>
            </p>

            <p>
                <label for="b_title">제목</label>
                <input type="text" name="b_title" id="b_title">
            </p>

            <p>
                <label for="b_content">내용</label>
                <textarea cols="60" rows="10" name="b_content" id="b_content"></textarea>
            </p>

            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">등록하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>