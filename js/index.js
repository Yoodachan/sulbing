// 상단 팝업창 제거
let top_link_btn = document.getElementsByClassName('top_link_btn')[0];
top_link_btn.addEventListener('click', function () {
  let top_banner = document.getElementsByClassName('top_banner')[0];
  top_banner.style.height = '0';
  top_banner.style.visibility = 'hidden';
});
//스크롤 모델
window.addEventListener('scroll' , function () {
  let quick = document.getElementsByClassName('quick_model')[0];
  // 스크롤 변수 선언
  var scroll_y = window.scrollY;
  if ( scroll_y >= 700 && scroll_y <=2800 ) {
    quick.classList.remove('quick_off');
    quick.classList.add('quick_on');
  }
  else {
    quick.classList.remove('quick_on');
    quick.classList.add('quick_off');
  }
})

//스크롤 버튼 생성

// 스크롤 버튼
var top_on = document.getElementsByClassName('top_on')[0];

window.addEventListener('scroll' , function () {
  // 스크롤 변수 선언
  var scroll_y = window.scrollY;
  if ( scroll_y >= 300 ) {
    top_on.classList.remove('top_scale_off');
    top_on.classList.add('top_scale_on');
  }
  else {
    top_on.classList.remove('top_scale_on');
    top_on.classList.add('top_scale_off');
  }
});
// 스크롤 버튼 클릭
top_on.addEventListener('click',
function () {
  window.scroll({ top: 0, left: 0, behavior: 'smooth' });
});


// 콘텐츠 팝업창 제거
let pop_btn = document.getElementsByClassName('pop_btn')[0];
pop_btn.addEventListener('click', function(){
  let pop_wrap = document.getElementById('popup_wrap');
  pop_wrap.style.opacity = '0';
  pop_wrap.style.visibility = 'hidden';
})



let bn_prev = document.getElementsByClassName('bn_prev')[0];
let bn_next = document.getElementsByClassName('bn_next')[0];
let change = 1;
let bn_items = document.getElementsByClassName('banner_item').length
let banner_list = document.getElementsByClassName('banner_list')[0];
let bn_text_now = document.getElementsByClassName('bn_text_now')[0];
let bn_text_all = document.getElementsByClassName('bn_text_all')[0];

let bn_stop = document.getElementsByClassName('bn_stop')[0];

let bn_simbol = document.getElementById('bn_simbol');


let bn_auto = null;

window.onload = function () {
  banner_list.style.width = bn_items+'00vw';
  bn_text_now.textContent = change;
  bn_text_all.textContent = bn_items;
  bn_auto = setInterval( next_banner , 6000 );
}

function next_banner () {
  if (change <= bn_items ) {
    banner_list.style.transition ='all 0.6s';
    banner_list.style.transform = `translateX(-` +change+ `00vw)`;
    change += 1;
  };
  if (change > bn_items  ) {
    banner_list.style.transition ='all 0.6s';
    banner_list.style.transform = `translateX(0vw)`;
    change = 1;
  };
  bn_text_now.textContent = change;
};

// 2안
bn_next.addEventListener( 'click' , next_banner );



bn_prev.addEventListener('click', function () {
  if ( change >= 2 ) {
    let rechange = change-=1;
    rechange -=1
    banner_list.style.transform = `translateX(-`+ rechange +`00vw)`;
  }
  bn_text_now.textContent = change;
})

bn_stop.addEventListener('click', function () {
  if (bn_simbol.classList.contains('fa-play')) {
    bn_simbol.classList.add('fa-pause');
    bn_simbol.classList.remove('fa-play');
    bn_auto = setInterval( next_banner , 6000 );
  }
  else {
    clearTimeout( bn_auto );
    bn_simbol.classList.remove('fa-pause');
    bn_simbol.classList.add('fa-play');
  }
})



// 상품 소개 슬라이드

 const hiSlider = $('.hot_item_list').bxSlider({
  mode:"horizontal",
  pager: false, 
  controls: false,
  minSlides: 1,
  maxSlides: 2,
  moveSlides: 1,
  slideWidth: 340,
  slideHeight:300,
  auto: true,
  autoHover: true
});


$(".main_Banner").mouseenter(function(){
$(".mb_hide_Pager").show('fast')
})
$(".main_Banner").mouseleave(function(){
$(".mb_hide_Pager").hide('fast')
})
// 상품 소개 슬라이드 버튼
$('.hot_item_prev').click(function () {
hiSlider.goToPrevSlide();  //이전 슬라이드 배너로 이동
});
$('.hot_item_next').click(function () {
hiSlider.goToNextSlide();  //이전 슬라이드 배너로 이동
});
// test set 3
// 글자 호버
$('.sns_banner_1').mouseenter(function() {
  $('.sns_banner_1>div').addClass('animate')
  })
$('.sns_banner_1').mouseleave(function() {
  $('.sns_banner_1>div').removeClass('animate')
  })
  $('.sns_banner_2').mouseenter(function() {
    $('.sns_banner_2>div').addClass('animate')
    })
  $('.sns_banner_2').mouseleave(function() {
    $('.sns_banner_2>div').removeClass('animate')
    })
  $('.sns_banner_3').mouseenter(function() {
    $('.sns_banner_3>div').addClass('animate')
    })
  $('.sns_banner_3').mouseleave(function() {
    $('.sns_banner_3>div').removeClass('animate')
    })
  $('.sns_banner_4').mouseenter(function() {
    $('.sns_banner_4>div').addClass('animate')
    })
  $('.sns_banner_4').mouseleave(function() {
    $('.sns_banner_4>div').removeClass('animate')
    })
  $('.sns_banner_5').mouseenter(function() {
    $('.sns_banner_5>div').addClass('animate')
    })
  $('.sns_banner_5').mouseleave(function() {
    $('.sns_banner_5>div').removeClass('animate')
    })
    $('.sns_banner_6').mouseenter(function() {
      $('.sns_banner_6>div').addClass('animate')
      })
    $('.sns_banner_6').mouseleave(function() {
      $('.sns_banner_6>div').removeClass('animate')
      })