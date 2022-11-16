let inner_title = document.getElementsByClassName('inner_title')[0];
let title_left = document.getElementsByClassName('title_left')[0];
let title_right = document.getElementsByClassName('title_right')[0];

function title_anime () {
    inner_title.classList.remove('drop_down_off');
    inner_title.classList.add('drop_down_on');
    title_left.classList.remove('left_move_off');
    title_left.classList.add('left_move_on');
    title_right.classList.remove('right_move_off');
    title_right.classList.add('right_move_on');
}
title_anime ()


function user_del(){
    var rtn_val = confirm("정말 탈퇴하시겠습니까?");
    if(rtn_val == true){
        // location.href = "member_delete.php?g_idx=<?php echo $array["idx"]; ?>";
        location.href = "edit_user_del.php";
    };
};