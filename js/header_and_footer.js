// 네브바 호버
$(".gnb_box").mouseenter(function(){
    $(".GNB_menu").slideDown()
})

$(".GNB_menu").mouseleave(function(){
    $(this).slideUp();
})

//네브바 픽스드
function nav_scroll () {
  $(window).scroll(function(){
    var y = window.scrollY
    const nav = $(".head_top")
    if (y>=450) {
      nav.addClass('head_fix')
    }
    else {
      nav.removeClass('head_fix')
    }
  });
}

nav_scroll()