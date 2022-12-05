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

let faq_wrap = document.getElementsByClassName('faq')[0];
let qna_wrap = document.getElementsByClassName('qna')[0];
let qnl_wrap = document.getElementsByClassName('qnl')[0];

let faq_back_off = document.getElementsByClassName('faq_back_off')[0];
let qna_back_off = document.getElementsByClassName('qna_back_off')[0];
let qnl_back_off = document.getElementsByClassName('qnl_back_off')[0];

let faq_back_on = document.getElementsByClassName('faq_back_on')[0];
let qna_back_on = document.getElementsByClassName('qna_back_on')[0];
let qnl_back_on = document.getElementsByClassName('qnl_back_on')[0];

let faq_icon = document.getElementsByClassName('faq_icon')[0];
let qna_icon = document.getElementsByClassName('qna_icon')[0];
let qnl_icon = document.getElementsByClassName('qnl_icon')[0];

let faq_link = document.getElementsByClassName('faq_link')[0];
let qna_link = document.getElementsByClassName('qna_link')[0];
let qnl_link = document.getElementsByClassName('qnl_link')[0];

// faq

faq_wrap.addEventListener('mouseenter' , function () {
    // 기존 크기 2배 확대 된 채로 캐릭터 사라짐
    // 트랜지션 주지않음
    faq_back_off.classList.add('back_hidden');

    // 호버 이미지 히든 삭제(보이게 됨)
    faq_back_on.classList.remove('back_hidden');

    // 호버 이미지 크기 원상복구하면서 서서히 나타남 (오퍼시티,스케일)
    faq_back_on.classList.add('back_view');

    //버튼 색 변경하기
    faq_link.classList.remove('link_off');
    faq_link.classList.add('link_on');
})

faq_wrap.addEventListener('mouseleave' , function () {
    faq_back_off.classList.remove('back_hidden');
    faq_back_on.classList.remove('back_view');
    faq_back_on.classList.add('back_hidden');

    faq_link.classList.remove('link_on');
    faq_link.classList.add('link_off');
})

// qna

qna_wrap.addEventListener('mouseenter' , function () {
  // 기존 크기 2배 확대 된 채로 캐릭터 사라짐
  // 트랜지션 주지않음
  qna_back_off.classList.add('back_hidden');

  // 호버 이미지 히든 삭제(보이게 됨)
  qna_back_on.classList.remove('back_hidden');

  // 호버 이미지 크기 원상복구하면서 서서히 나타남 (오퍼시티,스케일)
  qna_back_on.classList.add('back_view');

  //버튼 색 변경하기
  qna_link.classList.remove('link_off');
  qna_link.classList.add('link_on');
})

qna_wrap.addEventListener('mouseleave' , function () {
  qna_back_off.classList.remove('back_hidden');
  qna_back_on.classList.remove('back_view');
  qna_back_on.classList.add('back_hidden');

  qna_link.classList.remove('link_on');
  qna_link.classList.add('link_off');
})

// qnl

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







// 피해 상담 보상 기준 보기&감추기

let btn_more = document.getElementsByClassName('btn_more')[0];
let table = document.getElementsByClassName('table')[0];
let btn_arrow = document.getElementById('btn_arrow');

btn_more.addEventListener('click', function () {
  if (table.classList.contains('table_off')) {
    table.classList.remove('table_off');
    table.classList.add('table_on');
    btn_arrow.style.transform = 'rotate(180deg)';
  }
  else if (table.classList.contains('table_on')) {
    table.classList.remove('table_on');
    table.classList.add('table_off');
    btn_arrow.style.transform = 'rotate(0deg)';
  }
});

