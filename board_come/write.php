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
        function notice_check(){
            var b_name = document.getElementById("b_name");
            var b_pwd = document.getElementById("b_pwd");
            var b_title = document.getElementById("b_subject");
            var b_content = document.getElementById("b_memo");
        };
    </script>
</head>
<body>
    <form name="board_form" action="insert.php" method="post" onsubmit="return notice_check()">
        <fieldset>
            <legend>글쓰기</legend>

            <p>
                <label for="b_cate">카테고리</label>
                <select name="b_cate" id="b_cate" class="b_cate">
                    <option value="normal">일반</option>
                    <option value="music">음악</option>
                    <option value="movie">영화</option>
                </select>
            </p>

            <p>
                <label for="b_title">제목</label>
                <input type=text name="b_subject" id="b_subject"  size=60>
            </p>

            <p>
                <label for="b_name">이름</label>
                <input type="text" name="b_name" id="b_name">
            </p>

            <p>
                <label for="b_email">이메일</label>
                <input type="text" name="b_email" id="b_email">
            </p>
            
            <p>
                <label for="b_pwd">비밀번호</label>
                <input type="text" name="b_pwd" id="b_pwd">
            </p>

            <p>
                <label for="b_memo">내용</label>
                <textarea cols="60" rows="10" name="b_memo" id="b_memo"></textarea>
            </p>

            <p>
                <label for="b_url"> 링크 </label>
                <input type=text name="b_url" size=50>
            </p>

            <p>
                <label> 첨부파일 </label>
                <input type=file name="b_file" size=30>
            </p>



            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">등록하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>