<?php 
include "../inc/session.php"; 
// include "../inc/admin_check.php";

// 데이터 가져오기
$b_idx = $_GET["b_idx"];
$b_pwd = $_POST["b_pwd"];

// 테이블 이름
$table_name = "board";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from $table_name where idx = $b_idx;";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);

// 입력된 비밀번호와 DB에서 가져온 비밀번호가 다르다면 이전 페이지로 리디렉션
/* echo $b_pwd."/".$array["b_pwd"];
exit; */
if($b_pwd != $array["b_pwd"]){
    echo "
        <script>
            alert(\"비밀번호가 일치하지 않습니다.\");
            history.back();
        </script>
    ";
};

// DB 종료
mysqli_close($dbcon);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <style>
        body,input,button,textarea,select,option{font-size:20px}
        input[type=checkbox]{width:20px;height:20px}
        a{text-decoration:none;margin:0 5px}
        .cate{width:200px}
    </style>
    <script>
        function board_check(){
            var b_pwd = document.getElementById("b_pwd");
            var b_title = document.getElementById("b_title");
            var b_content = document.getElementById("b_content");

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
    <form name="board_form" action="edit.php?b_idx=<?php echo $b_idx; ?>" method="post" onsubmit="return board_check()">
        <fieldset>
            <legend>게시판</legend>
            <p>
                작성자 <?php echo $array["b_name"]; ?>
            </p>

            <p>
                <label for="b_pwd">비밀번호</label>
                <input type="text" name="b_pwd" id="b_pwd">
            </p>

            <p>
                <label for="cate">카테고리</label>
                <select name="cate" id="cate" class="cate">
                    <option value="normal"<?php if($array["cate"] == "normal") echo " selected"; ?>>일반</option>
                    <option value="music"<?php if($array["cate"] == "music") echo " selected"; ?>>음악</option>
                    <option value="movie"<?php if($array["cate"] == "movie") echo " selected"; ?>>영화</option>
                </select>
            </p>

            <p>
                <label for="b_title">제목</label>
                <input type="text" name="b_title" id="b_title" value="<?php echo $array["b_title"]; ?>">
            </p>

            <p>
                <label for="b_content">내용</label>
                <textarea cols="60" rows="10" name="b_content" id="b_content"><?php echo $array["b_content"]; ?></textarea>
            </p>

            <p>
                <a href="list.php">목록</a>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">수정하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>