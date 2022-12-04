let faq_wrap = document.getElementsByClassName('faq')[0];
let qna_wrap = document.getElementsByClassName('qna')[0];
let qnl_wrap = document.getElementsByClassName('qnl')[0];

let faq_back = document.getElementsByClassName('faq_back')[0];
let qna_back = document.getElementsByClassName('qna_back')[0];
let qnl_back = document.getElementsByClassName('qnl_back')[0];

let faq_icon = document.getElementsByClassName('faq_icon')[0];
let qna_icon = document.getElementsByClassName('qna_icon')[0];
let qnl_icon = document.getElementsByClassName('qnl_icon')[0];



faq_wrap.addEventListener('mouseenter' , function () {
  if (this.classList.contains('icon_off')) {
    this.classList.remove('icon_off');
    this.classList.add('icon_on');
  }
})

faq_wrap.addEventListener('mouseleave' , function () {
  if (this.classList.contains('icon_on')) {
    this.classList.remove('icon_on');
    this.classList.add('icon_off');
  }
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

