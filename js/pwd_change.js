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



//인풋 변수
let now_pwd = document.getElementById("now_pwd");
let pwd = document.getElementById("pwd");
let re_pwd = document.getElementById("re_pwd");

let pwd_val = document.getElementById("pwd_val").value;

// 비밀번호
var pwd_reg = /^(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]|.*[0-9]).{8,24}$/;
var d_pwd = document.getElementById("d_pwd");

let pwd_check = false;

// 비밀번호 확인
var d_re_pwd = document.getElementById("d_re_pwd");

let re_pwd_check = false;


//비밀번호

let pwd_text_wrap = document.getElementById("pwd_text_wrap");
let pwd_text = document.createElement('p');
let now_pwd_text_wrap = document.getElementById("now_pwd_text_wrap");
let now_pwd_text = document.createElement('p');
var d_now_pwd = document.getElementById("d_now_pwd");

let now_pwd_check = false;



// 비밀번호 확인

// let re_pwd_text_wrap = document.getElementById("re_pwd_text_wrap");
// let re_pwd_text = document.createElement('p');



// function now_pwd_text_on ( g_pwd ) {
//       var xmlhttp = fncGetXMLHttpRequest();
//       xmlhttp.open('GET', 'pwd_check_ajax.php?pwd='+g_pwd, false);
//       xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');
//       xmlhttp.onreadystatechange = function (){
//         if( xmlhttp.readyState=='4' && xmlhttp.status==200 ){
//           if( xmlhttp.status==500 || xmlhttp.status==404 || xmlhttp.status==403 )
//               alert( xmlhttp.status );
//               else{
//                 var txt = xmlhttp.responseText;
//                 txt = txt.replace(/\n/g, ""); // 행바꿈 제거
//                 txt = txt.replace(/\r/g, ""); // 엔터값 제거
//                 txt = txt.replace(/\s+/, ""); // 왼쪽 공백 제거
//                 txt = txt.replace(/\s+$/g, ""); // 오른쪽 공백 제거
//                 // alert("페이지에 입력된 값 : " + g_id + "\r처리 페이지에서 반환된 값 : " + txt);

//                 if(txt=='Y') {
//                   now_pwd.classList.remove('n_border');
//                   now_pwd.classList.add('err_border');
//                   now_pwd_text.innerText = '비밀번호가 일치합니다.';
//                   //chap2. 저장된 p태그에 텍스트 작성
//                   now_pwd_text_wrap.appendChild(now_text_text);
//                   //chap3. 부모요소에 텍스트가 저장된 변수를 자식요소로 삽입
//                   now_pwd_text.classList.remove('clear_txt');
//                   now_pwd_text.classList.add('err_txt');
//                   now_pwd_check = true;
//                 }  
//           } 
//         }
//       }
//     }
//     xmlhttp.send();

// function fncGetXMLHttpRequest(){
//     if (window.ActiveXObject){
//         try{
//             return new ActiveXObject("Msxml2.XMLHTTP");
//         }
//         catch(e){
//             try{
//                 return new ActiveXObject("Microsoft.XMLHTTP");
//             } 
//         catch(e1) { return null; }
//         }
//         //IE 외 파이어폭스 오페라 같은 브라우저에서 XMLHttpRequest 객체 구하기
//     } else if (window.XMLHttpRequest){
//         return new XMLHttpRequest();
//     } else{
//         return null;
//     }
//   }




// 현재 비밀번호 확인

now_pwd.addEventListener('input', 
function now_pwd_text_on () {
    if ( now_pwd.value != pwd_val ) {
        now_pwd.classList.remove('n_border');
        now_pwd.classList.add('err_border');
        now_pwd_text.innerText = "현재 비밀번호를 양식에 맞게 작성 해주세요";
        now_pwd_text_wrap.appendChild(now_pwd_text);
        now_pwd_text.classList.remove('clear_txt');
        now_pwd_text.classList.add('err_txt');
        now_pwd_check = false;
    } 
    else {
        now_pwd.classList.remove('err_border');
        now_pwd.classList.add('n_border');
        now_pwd_text.innerText = "현재 비밀번호가 일치하네요.";
        now_pwd_text_wrap.appendChild(now_pwd_text);
        now_pwd_text.classList.remove('err_txt');
        now_pwd_text.classList.add('clear_txt');
        now_pwd_check = true;
    }
}
);

now_pwd.addEventListener('change',
function now_pwd_text_out() {
    if ( now_pwd.value == pwd_val ) {
        now_pwd_text_wrap.removeChild(now_pwd_text);
        now_pwd_check = true;
   } 
}
);

now_pwd.addEventListener('input',
function now_pwd_button_on () {
    if (now_pwd.value) {
        d_now_pwd.classList.remove('off_view');
        d_now_pwd.classList.add('on_view');
    }
    else {
        d_now_pwd.classList.add('off_view');
        d_now_pwd.classList.remove('on_view');
    }
});

d_now_pwd.addEventListener('click',
function now_pwd_button_off () {
    now_pwd.value = ""
    now_pwd_text.classList.remove('clear_txt');
    now_pwd_text.classList.add('err_txt');
    now_pwd.classList.remove('n_border');
    now_pwd.classList.add('err_border');
    d_now_pwd.classList.remove('on_view');
    d_now_pwd.classList.add('off_view');
    now_pwd_text.innerText = "현재 비밀번호 작성은 필수 정보입니다.";
    now_pwd_text_wrap.appendChild(now_pwd_text);

    now_pwd_check = false;
}
);

// 비밀번호 변경

pwd.addEventListener('input', 
function pwd_text_on () {
    if(!pwd_reg.test(pwd.value)) {
            pwd.classList.remove('n_border');
            pwd.classList.add('err_border');
            pwd_text.innerText = "비밀번호를 양식에 맞게 작성 해주세요";
            pwd_text_wrap.appendChild(pwd_text);
            pwd_text.classList.remove('clear_txt');
            pwd_text.classList.add('err_txt');
            pwd_check = false;
    }
    else if (pwd.value == pwd_val) {
        pwd.classList.remove('n_border');
        pwd.classList.add('err_border');
        pwd_text.innerText = "현재와 같은 비밀번호 입니다..";
        pwd_text_wrap.appendChild(pwd_text);
        pwd_text.classList.remove('clear_txt');
        pwd_text.classList.add('err_txt');
        pwd_check = false;
        
    }
    else {
        pwd.classList.remove('err_border');
        pwd.classList.add('n_border');
        pwd_text.innerText = "비밀번호가 정상이네요";
        pwd_text_wrap.appendChild(pwd_text);
        pwd_text.classList.remove('err_txt');
        pwd_text.classList.add('clear_txt');
        pwd_check = true;
    }
}
);


pwd.addEventListener('input', 
function pwd_text_on () {
    if(re_pwd.value && (re_pwd.value != pwd.value)  ) {
        re_pwd.classList.remove('n_border');
        re_pwd.classList.add('err_border');
        re_pwd_text.innerText = "비밀번호 확인을 양식에 맞게 작성 해주세요";
        //chap2. 저장된 p태그에 텍스트 작성
        re_pwd_text_wrap.appendChild(re_pwd_text);
        //chap3. 부모요소에 텍스트가 저장된 변수를 자식요소로 삽입
        re_pwd_text.classList.remove('clear_txt');
        re_pwd_text.classList.add('err_txt');
        re_pwd_check = false;
    }
    else if (re_pwd.value && (re_pwd.value == pwd.value)) {
        re_pwd.classList.remove('err_border');
        re_pwd.classList.add('n_border');
        re_pwd_text_wrap.appendChild(re_pwd_text);
        re_pwd_text.classList.remove('err_txt');
        re_pwd_text.classList.add('clear_txt');
        re_pwd_text_wrap.removeChild(re_pwd_text);
        re_pwd_check = true;
    } 
}
);

pwd.addEventListener('change',
function pwd_text_out() {
    if(pwd_reg.test(pwd.value)) {
        pwd_text_wrap.removeChild(pwd_text);
   } 
    else {
    }
}
);

pwd.addEventListener('input',
function pwd_button_on () {
    if (pwd.value) {
        d_pwd.classList.remove('off_view');
        d_pwd.classList.add('on_view');
    }
    else {
        d_pwd.classList.add('off_view');
        d_pwd.classList.remove('on_view');
    }
});

d_pwd.addEventListener('click',
function pwd_button_off () {
    pwd.value = ""
    pwd_text.classList.remove('clear_txt');
    pwd_text.classList.add('err_txt');
    pwd.classList.remove('n_border');
    pwd.classList.add('err_border');
    d_pwd.classList.remove('on_view');
    d_pwd.classList.add('off_view');
    pwd_text.innerText = "비밀번호는 필수 정보입니다.";
    pwd_text_wrap.appendChild(pwd_text);

    pwd_check = false;
}
);



// 비밀번호 확인

let re_pwd_text_wrap = document.getElementById("re_pwd_text_wrap");
let re_pwd_text = document.createElement('p');

re_pwd.addEventListener('input', 
function re_pwd_text_on () {
    if ( re_pwd.value != pwd.value ) {
        re_pwd.classList.remove('n_border');
        re_pwd.classList.add('err_border');
        re_pwd_text.innerText = "비밀번호 확인을 양식에 맞게 작성 해주세요";
        //chap2. 저장된 p태그에 텍스트 작성
        re_pwd_text_wrap.appendChild(re_pwd_text);
        //chap3. 부모요소에 텍스트가 저장된 변수를 자식요소로 삽입
        re_pwd_text.classList.remove('clear_txt');
        re_pwd_text.classList.add('err_txt');
        re_pwd_check = false;
    } 
    else {
        re_pwd.classList.remove('err_border');
        re_pwd.classList.add('n_border');
        re_pwd_text.innerText = "비밀번호 확인이 정상이네요";
        re_pwd_text_wrap.appendChild(re_pwd_text);
        re_pwd_text.classList.remove('err_txt');
        re_pwd_text.classList.add('clear_txt');
        re_pwd_check = true;
    }
}
);

re_pwd.addEventListener('input', 
function re_pwd_text_on () {
    if ( !pwd_reg.test(pwd.value) ) {
            re_pwd.classList.remove('n_border');
            re_pwd.classList.add('err_border');
            re_pwd_text.innerText = "비밀번호 확인을 양식에 맞게 작성 해주세요";
            //chap2. 저장된 p태그에 텍스트 작성
            re_pwd_text_wrap.appendChild(re_pwd_text);
            //chap3. 부모요소에 텍스트가 저장된 변수를 자식요소로 삽입
            re_pwd_text.classList.remove('clear_txt');
            re_pwd_text.classList.add('err_txt');
            re_pwd_check = false;
    } 
}
);


re_pwd.addEventListener('change',
function re_pwd_text_out() {
    if ( re_pwd.value == pwd.value  ) {
        re_pwd_text_wrap.removeChild(re_pwd_text);
   } 
}
);

re_pwd.addEventListener('input',
function re_pwd_button_on () {
    if (re_pwd.value) {
        d_re_pwd.classList.remove('off_view');
        d_re_pwd.classList.add('on_view');
    }
    else {
        d_re_pwd.classList.add('off_view');
        d_re_pwd.classList.remove('on_view');
    }
});

d_re_pwd.addEventListener('click',
function re_pwd_button_off () {
    re_pwd.value = ""
    re_pwd_text.classList.remove('clear_txt');
    re_pwd_text.classList.add('err_txt');
    re_pwd.classList.remove('n_border');
    re_pwd.classList.add('err_border');
    d_re_pwd.classList.remove('on_view');
    d_re_pwd.classList.add('off_view');
    re_pwd_text.innerText = "비밀번호 확인은 필수 정보입니다.";
    re_pwd_text_wrap.appendChild(re_pwd_text);

    re_pwd_check = false;
}
);







// 눈알 효과

let pwd_eye_on = document.getElementById("pwd_eye_on");
let pwd_eye_off = document.getElementById("pwd_eye_off");

let re_pwd_eye_on = document.getElementById("re_pwd_eye_on");
let re_pwd_eye_off = document.getElementById("re_pwd_eye_off");

let now_pwd_eye_on = document.getElementById("now_pwd_eye_on");
let now_pwd_eye_off = document.getElementById("now_pwd_eye_off");


pwd_eye_on.addEventListener('click',
function () {
        // 1. 일반 눈알이 사라짐
    pwd_eye_on.classList.remove('on_view')
    pwd_eye_on.classList.add('off_view')
        // 2. 슬래시 눈알이 생김
    pwd_eye_off.classList.remove('off_view')
    pwd_eye_off.classList.add('on_view')
        // 3. 비번이 보여야함
    pwd.type = "text"
})

pwd_eye_off.addEventListener('click',
function () {
        // 1. 슬래시 눈알이 사라짐
    pwd_eye_on.classList.remove('off_view')
    pwd_eye_on.classList.add('on_view')
        // 2. 일반 눈알이 생김
    pwd_eye_off.classList.remove('on_view')
    pwd_eye_off.classList.add('off_view')
        // 3. 비번이 안보여야 함
    pwd.type = "password"
})



re_pwd_eye_on.addEventListener('click',
function () {
        // 1. 일반 눈알이 사라짐
    re_pwd_eye_on.classList.remove('on_view')
    re_pwd_eye_on.classList.add('off_view')
        // 2. 슬래시 눈알이 생김
    re_pwd_eye_off.classList.remove('off_view')
    re_pwd_eye_off.classList.add('on_view')
        // 3. 비번이 보여야함
    re_pwd.type = "text"
})

re_pwd_eye_off.addEventListener('click',
function () {
        // 1. 슬래시 눈알이 사라짐
    re_pwd_eye_on.classList.remove('off_view')
    re_pwd_eye_on.classList.add('on_view')
        // 2. 일반 눈알이 생김
    re_pwd_eye_off.classList.remove('on_view')
    re_pwd_eye_off.classList.add('off_view')
        // 3. 비번이 안보여야 함
    re_pwd.type = "password"
})




now_pwd_eye_on.addEventListener('click',
function () {
        // 1. 일반 눈알이 사라짐
    now_pwd_eye_on.classList.remove('on_view')
    now_pwd_eye_on.classList.add('off_view')
        // 2. 슬래시 눈알이 생김
    now_pwd_eye_off.classList.remove('off_view')
    now_pwd_eye_off.classList.add('on_view')
        // 3. 비번이 보여야함
    now_pwd.type = "text"
})

now_pwd_eye_off.addEventListener('click',
function () {
        // 1. 슬래시 눈알이 사라짐
    now_pwd_eye_on.classList.remove('off_view')
    now_pwd_eye_on.classList.add('on_view')
        // 2. 일반 눈알이 생김
    now_pwd_eye_off.classList.remove('on_view')
    now_pwd_eye_off.classList.add('off_view')
        // 3. 비번이 안보여야 함
    now_pwd.type = "password"
})















function edit_pwd_check(){
    if( now_pwd_check = false ) {
            now_pwd.classList.remove('n_border');
            now_pwd.classList.add('err_border');
            now_pwd_text.innerText = "현재 비밀번호를 양식에 맞게 작성 해주세요";
            now_pwd_text_wrap.appendChild(now_pwd_text);
            now_pwd_text.classList.remove('clear_txt');
            now_pwd_text.classList.add('err_txt');
            now_pwd_check = false;
            return false;
    };

    if( pwd_check = false ) {
            pwd.classList.remove('n_border');
            pwd.classList.add('err_border');
            pwd_text.innerText = "비밀번호를 양식에 맞게 작성 해주세요";
            pwd_text_wrap.appendChild(pwd_text);
            pwd_text.classList.remove('clear_txt');
            pwd_text.classList.add('err_txt');
            pwd_check = false;
            return false;
    };
    
    if ( re_pwd.value != pwd.value ) {
        re_pwd.classList.remove('n_border');
        re_pwd.classList.add('err_border');
        re_pwd_text.innerText = "비밀번호 확인을 양식에 맞게 작성 해주세요";
        //chap2. 저장된 p태그에 텍스트 작성
        re_pwd_text_wrap.appendChild(re_pwd_text);
        //chap3. 부모요소에 텍스트가 저장된 변수를 자식요소로 삽입
        re_pwd_text.classList.remove('clear_txt');
        re_pwd_text.classList.add('err_txt');
        re_pwd_check = false;
        return false;
    }         
};

function mem_del(){
    var rtn_val = confirm("정말 탈퇴하시겠습니까?");
    if(rtn_val == true){
        // location.href = "member_delete.php?g_idx=<?php echo $array["idx"]; ?>";
        location.href = "member_delete.php";
    };
};