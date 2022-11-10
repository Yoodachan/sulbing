// 애니메이션

// 타이틀 텍스트 동작 1 (타이틀 텍스트가 떨어짐)
var character = document.getElementsByClassName('register_img')[0]

let inner_title = document.getElementsByClassName('inner_title')[0];
let title_left = document.getElementsByClassName('title_left')[0];
let title_right = document.getElementsByClassName('title_right')[0];


function character_animation () {
    character.classList.remove('anime_off');
    character.classList.add('anime_on');
}

character_animation ()

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


let welcome_0 = document.getElementsByClassName('welcome')[0];
let welcome_1 = document.getElementsByClassName('welcome')[1];
let welcome_2 = document.getElementsByClassName('welcome')[2];
let welcome_3 = document.getElementsByClassName('welcome')[3];
let welcome_4 = document.getElementsByClassName('welcome')[4];
let welcome_5 = document.getElementsByClassName('welcome')[5];
let welcome_if = document.querySelector('.rtty_on_05')

//6초마다 실행댐
var count = true;
setInterval ( function () {
            welcome_0.classList.remove('rtty_off_00');
            welcome_0.classList.add('rtty_on_00');
            welcome_1.classList.remove('rtty_off_01');
            welcome_1.classList.add('rtty_on_01');
            welcome_2.classList.remove('rtty_off_02');
            welcome_2.classList.add('rtty_on_02');
            welcome_3.classList.remove('rtty_off_03');
            welcome_3.classList.add('rtty_on_03');
            welcome_4.classList.remove('rtty_off_04');
            welcome_4.classList.add('rtty_on_04');
            welcome_5.classList.remove('rtty_off_05');
            welcome_5.classList.add('rtty_on_05');
} , 1200 )


setInterval ( function () {
        welcome_0.classList.remove('rtty_on_00');
        welcome_1.classList.remove('rtty_on_01');
        welcome_2.classList.remove('rtty_on_02');
        welcome_3.classList.remove('rtty_on_03');
        welcome_4.classList.remove('rtty_on_04');
        welcome_5.classList.remove('rtty_on_05');
    
        welcome_0.classList.add('rtty_off_00');
        welcome_1.classList.add('rtty_off_01');
        welcome_2.classList.add('rtty_off_02');
        welcome_3.classList.add('rtty_off_03');
        welcome_4.classList.add('rtty_off_04');
        welcome_5.classList.add('rtty_off_05');
} , 4800 )


let welcome_clear = document.getElementsByClassName('welcome_clear')[0];
let welcome_service = document.getElementsByClassName('welcome_service')[0];
let welcome_user = document.getElementsByClassName('welcome_user')[0];
let home_btn = document.getElementsByClassName('home_btn')[0];

function welcome_anime (){

    welcome_clear.classList.remove('welcome_down_off_00');
    welcome_clear.classList.add('welcome_down_on_00');

    welcome_service.classList.remove('welcome_down_off_01');
    welcome_service.classList.add('welcome_down_on_01');

    welcome_user.classList.remove('welcome_down_off_02');
    welcome_user.classList.add('welcome_down_on_02');

    home_btn.classList.remove('btn_left_off');
    home_btn.classList.add('btn_left_on');
}

welcome_anime ()




// var container ㅇ= document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
// var options = { //지도를 생성할 때 필요한 기본 옵션
// 	center: new kakao.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
// 	level: 3 //지도의 레벨(확대, 축소 정도)
// };

// var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴