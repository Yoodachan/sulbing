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