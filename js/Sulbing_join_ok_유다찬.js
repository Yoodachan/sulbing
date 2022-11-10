// 애니메이션

// 타이틀 텍스트 동작 1 (타이틀 텍스트가 떨어짐)
var character = document.getElementsByClassName('register_img')[0]

let inner_title = document.getElementsByClassName('inner_title')[0];
let title_left = document.getElementsByClassName('title_left')[0];
let title_right = document.getElementsByClassName('title_right')[0];

let welcome_0 = document.getElementsByClassName('welcome')[0];
let welcome_1 = document.getElementsByClassName('welcome')[1];
let welcome_2 = document.getElementsByClassName('welcome')[2];
let welcome_3 = document.getElementsByClassName('welcome')[3];
let welcome_4 = document.getElementsByClassName('welcome')[4];
let welcome_5 = document.getElementsByClassName('welcome')[5];

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
console.log("Dd ")
// var container ㅇ= document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
// var options = { //지도를 생성할 때 필요한 기본 옵션
// 	center: new kakao.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
// 	level: 3 //지도의 레벨(확대, 축소 정도)
// };

// var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴