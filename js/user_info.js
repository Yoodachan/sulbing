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
var u_name = document.getElementById("u_name");
var u_id = document.getElementById("u_id");
let pwd = document.getElementById("pwd");
let re_pwd = document.getElementById("re_pwd");
let mobile = document.getElementById("mobile");
let email = document.getElementById("email_id");
let dns = document.getElementById("email_dns");
let birth = document.getElementById("birth");

let ps_code = document.getElementById("ps_code");
let addr1 = document.getElementById("addr1");
let addr2 = document.getElementById("addr2");
let addr3 = document.getElementById("addr3");

let apply_all = document.getElementById("apply_all");

let apply_priv = document.getElementById("apply_priv");
let apply_medie = document.getElementById("apply_medie");
let apply_age = document.getElementById("apply_age");
let apply_marketing = document.getElementById("apply_marketing");


// 모바일
var mobile_reg = /^[0-9]{2,3}[0-9]{3,4}[0-9]{4}$/;
var d_mobile = document.getElementById("d_mobile");


// 이메일
var email_reg = regExp = /^[a-zA-Z0-9+-\_.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
var d_email = document.getElementById("d_email");


// 주소
var d_addr3 = document.getElementById("d_addr3");

// 버튼 포커스
var postal_btn = document.getElementById("postal_btn");








// 연락처
let mobile_text_wrap = document.getElementById("mobile_text_wrap");
let mobile_text = document.createElement('p');

//chap1. p태그를 변수에 저장
mobile.addEventListener('input', 
function mobile_text_on () {
    if(!mobile_reg.test(mobile.value) ) {
        mobile.classList.remove('n_border');
        mobile.classList.add('err_border');
        mobile_text.innerText = "연락처를 양식에 맞게 작성 해주세요";
        //chap2. 저장된 p태그에 텍스트 작성
        mobile_text_wrap.appendChild(mobile_text);
        //chap3. 부모요소에 텍스트가 저장된 변수를 자식요소로 삽입
        mobile_text.classList.remove('clear_txt');
        mobile_text.classList.add('err_txt');
        mobile_check = false;
    } 
    else {
        mobile.classList.remove('err_border');
        mobile.classList.add('n_border');
        mobile_text.innerText = "연락처가 정상이네요";
        mobile_text_wrap.appendChild(mobile_text);
        mobile_text.classList.remove('err_txt');
        mobile_text.classList.add('clear_txt');
        mobile_check = true;
    }
}
);

mobile.addEventListener('change',
function mobile_text_out() {
    if(mobile_reg.test(mobile.value)) {
        mobile_text_wrap.removeChild(mobile_text);
        mobile_check = true;
   } 
}
);

mobile.addEventListener('input',
function mobile_button_on () {
    if (mobile.value) {
        d_mobile.classList.remove('off_view');
        d_mobile.classList.add('on_view');
    }
    else {
        d_mobile.classList.add('off_view');
        d_mobile.classList.remove('on_view');
    }
});

d_mobile.addEventListener('click',
function mobile_button_off () {
    mobile.value = ""
    mobile_text.classList.remove('clear_txt');
    mobile_text.classList.add('err_txt');
    mobile.classList.remove('n_border');
    mobile.classList.add('err_border');
    d_mobile.classList.remove('on_view');
    d_mobile.classList.add('off_view');
    mobile_text.innerText = "연락처는 필수 정보입니다.";
    mobile_text_wrap.appendChild(mobile_text);
    mobile_check = false;
}
);


// 이메일
let email_text_wrap = document.getElementById("email_text_wrap");
let email_text = document.createElement('p');

//chap1. p태그를 변수에 저장
email.addEventListener('input', 
function email_text_on () {
        if (!email_reg.test(email.value)) {
            email.classList.remove('n_border');
            email.classList.add('err_border');
            email_text.innerText = "이메일을 양식에 맞게 작성 해주세요";
            //chap2. 저장된 p태그에 텍스트 작성
            email_text_wrap.appendChild(email_text);
            //chap3. 부모요소에 텍스트가 저장된 변수를 자식요소로 삽입
            email_text.classList.remove('clear_txt');
            email_text.classList.add('err_txt');
            email_check = false;
        }
        else {
            email.classList.remove('err_border');
            email.classList.add('n_border');
            email_text.innerText = "이메일가 정상이네요";
            email_text_wrap.appendChild(email_text);
            email_text.classList.remove('err_txt');
            email_text.classList.add('clear_txt');
            email_check = true;
        }
    }
);

email.addEventListener('change',
    function mobile_text_out() {
        if (email_reg.test(email.value)) {
            email_text_wrap.removeChild(email_text);
            email_check = true;
        }
    }
);




email.addEventListener('input',
    function email_button_on() {
        if (email.value) {
            d_email.classList.remove('off_view');
            d_email.classList.add('on_view');
        }
        else {
            d_email.classList.add('off_view');
            d_email.classList.remove('on_view');
        }
    });

d_email.addEventListener('click',
    function email_button_off() {
        email.value = ""
        email_text.classList.remove('clear_txt');
        email_text.classList.add('err_txt');
        email.classList.remove('n_border');
        email.classList.add('err_border');
        d_email.classList.remove('on_view');
        d_email.classList.add('off_view');
        email_text.innerText = "이메일은 필수 정보입니다.";
        email_text_wrap.appendChild(email_text);

        email_check = false;
    }
);





// 나머지 주소 삭제 버튼

addr3.addEventListener('input',
function addr3_button_on () {
    if (addr3.value) {
        d_addr3.classList.remove('off_view');
        d_addr3.classList.add('on_view');
    }
    else {
        d_addr3.classList.add('off_view');
        d_addr3.classList.remove('on_view');
    }
});

d_addr3.addEventListener('click',
function addr3_button_off () {
    addr3.value = ""
    d_addr3.classList.remove('on_view');
    d_addr3.classList.add('off_view');
}
);

//주소

let addr_text_wrap = document.getElementById("addr_text_wrap");
let addr_text = document.createElement('p');
let addr_on = document.querySelector('.addr_text')
// 클래스가 있으면
// (addr_on !== null) 

// 주소팝업

postal_btn.addEventListener('click',
function addrFind() {
    new daum.Postcode({
      oncomplete: function(data) {
      // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
      // 각 주소의 노출 규칙에 따라 주소를 조합한다.
      // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
      var addr = ''; // 주소 변수
      var extraAddr = ''; // 참고항목 변수
  
      //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
      if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
        addr = data.roadAddress;
      } else { // 사용자가 지번 주소를 선택했을 경우(J)
        addr = data.jibunAddress;
      }
      // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
      if(data.userSelectedType === 'R'){
      // 법정동명이 있을 경우 추가한다. (법정리는 제외)
      // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
      if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
        extraAddr += data.bname;
      }
      // 건물명이 있고, 공동주택일 경우 추가한다.
      if(data.buildingName !== '' && data.apartment === 'Y'){
        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
      }
      // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
      if(extraAddr !== ''){
        extraAddr = ' (' + extraAddr + ')';
      }

      // 조합된 참고항목을 해당 필드에 넣는다.
      addr2.value = extraAddr;
      } else {
        addr2.value = '';
      }
      // 우편번호와 주소 정보를 해당 필드에 넣는다.
      ps_code.value = data.zonecode;
      addr1.value = addr;
      // 커서를 상세주소 필드로 이동한다.
      addr3.focus();
      }
    }).open();
  }
)


let now_moble = document.getElementsByClassName('now_mobile')[0];
let now_email = document.getElementsByClassName('now_email')[0];
let now_addr3 = document.getElementsByClassName('now_addr3')[0];
// console.log(now_moble.placeholder)
let mobile_readonly_wrap = document.getElementsByClassName('mobile_readonly_wrap')[0]
let mobile_input_wrap = document.getElementsByClassName('mobile_input_wrap')[0]

let mobile_cg_on = document.getElementsByClassName('mobile_cg_btn')[0]
let mobile_cg_off = document.getElementsByClassName('mobile_cg_btn')[1]

mobile_cg_on.addEventListener('click',function(){
    mobile_readonly_wrap.classList.remove('cg_off');
    mobile_readonly_wrap.classList.add('cg_on');

    mobile.value = "";

    mobile_input_wrap.classList.remove('cg_on');
    mobile_input_wrap.classList.add('cg_off');
})

mobile_cg_off.addEventListener('click',function(){
    mobile_input_wrap.classList.remove('cg_off');
    mobile_input_wrap.classList.add('cg_on');

    mobile.value = now_moble.placeholder;

    mobile_readonly_wrap.classList.remove('cg_on');
    mobile_readonly_wrap.classList.add('cg_off');
})


let email_readonly_wrap = document.getElementsByClassName('email_readonly_wrap')[0]
let email_input_wrap = document.getElementsByClassName('email_input_wrap')[0]

let email_cg_on = document.getElementsByClassName('email_cg_btn')[0]
let email_cg_off = document.getElementsByClassName('email_cg_btn')[1]

email_cg_on.addEventListener('click',function(){
    email_readonly_wrap.classList.remove('cg_off');
    email_readonly_wrap.classList.add('cg_on');

    email.value = "";

    email_input_wrap.classList.remove('cg_on');
    email_input_wrap.classList.add('cg_off');
})

email_cg_off.addEventListener('click', function(){
    email_input_wrap.classList.remove('cg_off');
    email_input_wrap.classList.add('cg_on');

    email.value = now_email.placeholder;

    email_readonly_wrap.classList.remove('cg_on');
    email_readonly_wrap.classList.add('cg_off');
})


let addr3_readonly_wrap = document.getElementsByClassName('addr3_readonly_wrap')[0]
let addr3_input_wrap = document.getElementsByClassName('addr3_input_wrap')[0]

let addr3_cg_on = document.getElementsByClassName('addr3_cg_btn')[0]
let addr3_cg_off = document.getElementsByClassName('addr3_cg_btn')[1]

addr3_cg_on.addEventListener('click',function(){
    addr3_readonly_wrap.classList.remove('cg_off');
    addr3_readonly_wrap.classList.add('cg_on');

    addr3.value = "";

    addr3_input_wrap.classList.remove('cg_on');
    addr3_input_wrap.classList.add('cg_off');
})

addr3_cg_off.addEventListener('click', function(){
    addr3_input_wrap.classList.remove('cg_off');
    addr3_input_wrap.classList.add('cg_on');

    addr3.value = now_addr3.placeholder;

    addr3_readonly_wrap.classList.remove('cg_on');
    addr3_readonly_wrap.classList.add('cg_off');
})

let apply_marketing_hidden = document.getElementById('apply_marketing_hidden');

function edit_info_check() {

    //연락처//
    if( mobile_check = false ) {

        mobile.classList.remove('n_border');
        mobile.classList.add('err_border');
        mobile_text.innerText = "연락처를 양식에 맞게 작성 해주세요";
        mobile_text_wrap.appendChild(mobile_text);
        mobile_text.classList.remove('clear_txt');
        mobile_text.classList.add('err_txt');

        mobile.focus();
        return false;
    }
    //이메일//
    if( email_check = false ) {

        email.classList.remove('n_border');
        email.classList.add('err_border');
        email_text.innerText = "이메일을 양식에 맞게 작성 해주세요";
        email_text_wrap.appendChild(email_text);
        email_text.classList.remove('clear_txt');
        email_text.classList.add('err_txt');

        email.focus();
        return false;
    }

    if( apply_marketing.checked ) {
        apply_marketing_hidden.disabled = true;
    }
    else {
        apply_marketing.disabled = true;
        apply_marketing_hidden.disabled = false;
    }
}

