<?php
//                         주소    어드민계쩡 비번 디비명    접속 실패시 알림 
$dbcon = mysqli_connect("localhost", "ydc1026", "flqhdaos12!", "ydc1026") or die("접속에 실패하였습니다.");
mysqli_set_charset($dbcon, "utf8");
?>