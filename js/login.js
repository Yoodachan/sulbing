function login_form_check(){
    var u_id = document.getElementById("u_id");
    var pwd = document.getElementById("pwd");

    if(!u_id.value){
        alert("아이디를 입력하세요.");
        u_id.focus();
        return false;
    };
    if(!pwd.value){
        alert("비밀번호를 입력하세요.");
        pwd.focus();
        return false;
    };

    if (grecaptcha.getResponse() == "") {
        alert("리캡챠를 체크해야 합니다.");
        return false;
    }
}





let inner_title = document.getElementsByClassName('inner_title')[0];
let title_left = document.getElementsByClassName('title_left')[0];
let title_right = document.getElementsByClassName('title_right')[0];


function title_anime () {
    inner_title.classList.remove('drop_down_off');
    inner_title.classList.add('drop_down_on');
    let title_move = document.querySelector('.drop_down_on');
    // 타이틀 텍스트 동작 2 (동작 1이 실행 되면 왼쪽 화살표가 나타나서 붙음)
    if (title_move !== null) {
        title_left.classList.remove('left_move_off');
        title_left.classList.add('left_move_on');
        let title_left_move = document.querySelector('.left_move_on');
        if ( title_left_move !== null ) {
            title_right.classList.remove('right_move_off');
            title_right.classList.add('right_move_on');
        }
    }
}

title_anime ()

