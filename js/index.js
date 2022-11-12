
// 상단 팝업창 제거
$(".top_link_wrap>button").click(function(){
    $(".top_banner").slideUp("slow")
})
// 콘텐츠 팝업창 제거
$("#popup a").click(function(){
  $("#popup").hide()
})


//광고 퀵업
function quick_banner () {
  $(window).scroll(function(){
    var y = window.scrollY
    const quick = $(".quick_on")
    console.log (y)
    if (y>=700 && y<=2800) {
      quick.fadeIn()
    }
    else {
      quick.fadeOut()
      // quick.css({display: 'none', opacity: 0})
      // quick.removeClass('quick_op')
      // quick.animate({'opacity':'0'},300)
    }
  });
}

quick_banner()









// 메인 배너 슬라이드
const mbSlider = $('.banner_slider').bxSlider({
    mode:"horizontal",
    pager: false, 
    controls: false,
    speed: 1000,
    auto: true,
    autoHover: true
});

$(".main_Banner").mouseenter(function(){
  $(".mb_hide_Pager").show('fast')
})

$(".main_Banner").mouseleave(function(){
  $(".mb_hide_Pager").hide('fast')
})

$('.mb_hide_Pager').mouseenter(function(){
  mbSlider.stopAuto() 
})   
$('.mb_hide_Pager').mouseleave(function(){
  mbSlider.startAuto()
})    

// 메인 배너 슬라이드 버튼

$('.mb_Prev').click(function () {
  mbSlider.goToPrevSlide();  //이전 슬라이드 배너로 이동
 });

 $('.mb_Next').click(function () {
  mbSlider.goToNextSlide();  //이전 슬라이드 배너로 이동
 });





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












//스크롤 올리기 버튼


  $(window).scroll(function(){
    var y = window.scrollY
    const top_on = $(".top_on")
    if (y>=300) {
      top_on.addClass('animate')
    }
    else {
      top_on.removeClass('animate')}
  })

// function clickme(){
//   $(".top_on").click(function () {
//     window.scrollTo(0,0);
//   })
// }