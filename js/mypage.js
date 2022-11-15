// 애니메이션

// 타이틀 텍스트 동작 1 (타이틀 텍스트가 떨어짐)

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


let private_info = document.getElementsByClassName('private_info')[0];
let mypage_btn = document.getElementsByClassName('link_btn')[0];

let mypage_img_before = document.getElementsByClassName('mypage_img_before')[0];
let mypage_img_after = document.getElementsByClassName('mypage_img_after')[0];

private_info.addEventListener('mouseenter', function () {
    console.log('on')
    mypage_btn.classList.remove('link_btn_off');
    mypage_btn.classList.add('link_btn_on');

    mypage_img_before.style.display = "none";

    mypage_img_after.classList.remove('link_img_off');
    mypage_img_after.classList.add('link_img_on');
})

private_info.addEventListener('mouseleave', function () {
    console.log('out')
    mypage_btn.classList.remove('link_btn_on');
    mypage_btn.classList.add('link_btn_off');

    mypage_img_before.style.display = "block";

    mypage_img_after.classList.remove('link_img_on');
    mypage_img_after.classList.add('link_img_off');
})

let my_qna = document.getElementsByClassName('my_qna')[0];
let qna_btn = document.getElementsByClassName('link_btn')[1];


let qna_img_before = document.getElementsByClassName('qna_img_before')[0];
let qna_img_after = document.getElementsByClassName('qna_img_after')[0];


my_qna.addEventListener('mouseenter', function () {
    console.log('on')
    qna_btn.classList.remove('link_btn_off');
    qna_btn.classList.add('link_btn_on');

    qna_img_before.style.display = "none";

    qna_img_after.classList.remove('link_img_off');
    qna_img_after.classList.add('link_img_on');
})

my_qna.addEventListener('mouseleave', function () {
    console.log('out')
    qna_btn.classList.remove('link_btn_on');
    qna_btn.classList.add('link_btn_off');

    qna_img_before.style.display = "block";

    qna_img_after.classList.remove('link_img_on');
    qna_img_after.classList.add('link_img_off');
})