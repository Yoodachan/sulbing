<?php 
include "../inc/session.php"; 

// DB 연결
include "../inc/dbcon.php";


?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

</head>
<body>
    <form action="write_post.php" method="post" enctype="multipart/form-data">
    <table width=600 border=1>
        <tr>
            <td colspan=2 aline=center> 글쓰기 </td>
        </tr>
        <tr>
            <td> 제목 </td>
            <td><input type=text name="b_subject" size=60></td>
        </tr>
        <tr>
            <td> 이름 </td>
            <td><input type=text name="b_name" size=20></td>
        </tr>
        <tr>
            <td> 이메일 </td>
            <td><input type=text name="b_email" size=30></td>
        </tr>
        <tr>
            <td> 비밀번호 </td>
            <td><input type=password name="b_pwd" size=20></td>
        </tr>
        <tr>
            <td> 내용 </td>
            <td> <textarea name=b_memo cols=70 row=8></textarea> </td>
        </tr>
        <tr>
            <td> 링크 </td>
            <td><input type=text name="b_url" size=50></td>
        </tr>
        <tr>
            <td> 첨부파일 </td>
            <td><input type=file name="b_file" size=30></td>
        </tr>
        <tr>
            <td> 작성 </td>
            <td> <button type="submit">누름직</button> </td>
        </tr>
    </table>
    </form>
</body>
</html>