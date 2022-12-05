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


let inf_wrap = document.getElementsByClassName('inf')[0];
let qnl_wrap = document.getElementsByClassName('qnl')[0];

let inf_back_off = document.getElementsByClassName('inf_back_off')[0];
let qnl_back_off = document.getElementsByClassName('qnl_back_off')[0];

let inf_back_on = document.getElementsByClassName('inf_back_on')[0];
let qnl_back_on = document.getElementsByClassName('qnl_back_on')[0];

let inf_icon = document.getElementsByClassName('inf_icon')[0];
let qnl_icon = document.getElementsByClassName('qnl_icon')[0];

let inf_link = document.getElementsByClassName('inf_link')[0];
let qnl_link = document.getElementsByClassName('qnl_link')[0];



inf_wrap.addEventListener('mouseenter' , function () {
    // 기존 크기 2배 확대 된 채로 캐릭터 사라짐
    // 트랜지션 주지않음
    inf_back_off.classList.add('back_hidden');
  
    // 호버 이미지 히든 삭제(보이게 됨)
    inf_back_on.classList.remove('back_hidden');
  
    // 호버 이미지 크기 원상복구하면서 서서히 나타남 (오퍼시티,스케일)
    inf_back_on.classList.add('back_view');
  
    //버튼 색 변경하기
    inf_link.classList.remove('link_off');
    inf_link.classList.add('link_on');
  })
  
  inf_wrap.addEventListener('mouseleave' , function () {
    inf_back_off.classList.remove('back_hidden');
    inf_back_on.classList.remove('back_view');
    inf_back_on.classList.add('back_hidden');
  
    inf_link.classList.remove('link_on');
    inf_link.classList.add('link_off');
  })




qnl_wrap.addEventListener('mouseenter' , function () {
    // 기존 크기 2배 확대 된 채로 캐릭터 사라짐
    // 트랜지션 주지않음
    qnl_back_off.classList.add('back_hidden');
  
    // 호버 이미지 히든 삭제(보이게 됨)
    qnl_back_on.classList.remove('back_hidden');
  
    // 호버 이미지 크기 원상복구하면서 서서히 나타남 (오퍼시티,스케일)
    qnl_back_on.classList.add('back_view');
  
    //버튼 색 변경하기
    qnl_link.classList.remove('link_off');
    qnl_link.classList.add('link_on');
  })
  
  qnl_wrap.addEventListener('mouseleave' , function () {
    qnl_back_off.classList.remove('back_hidden');
    qnl_back_on.classList.remove('back_view');
    qnl_back_on.classList.add('back_hidden');
  
    qnl_link.classList.remove('link_on');
    qnl_link.classList.add('link_off');
  })