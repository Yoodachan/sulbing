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


function edit_form_check(){
    var pwd = document.getElementById("pwd");
    var repwd = document.getElementById("repwd");

    if(pwd.value){
        var pw_len = pwd.value.length;
        if(pw_len < 4 || pw_len > 12){
            alert("비밀번호는 4~12글자만 입력할 수 있습니다.");
            pwd.focus();
            return false;
        };
    };
    
    if(pwd.value){
        if(pwd.value != repwd.value){
            alert("비밀번호를 확인해 주세요.");
            repwd.focus();
            return false;
        };
    };           
};

function mem_del(){
    var rtn_val = confirm("정말 탈퇴하시겠습니까?");
    if(rtn_val == true){
        // location.href = "member_delete.php?g_idx=<?php echo $array["idx"]; ?>";
        location.href = "member_delete.php";
    };
};