// 네브바 호버

$(".test").mouseenter(function(){
    $(".GNB_menu").stop().slideDown()
})

$(".test").mouseleave(function(){
    $(".GNB_menu").stop().slideUp();
})

//네브바 픽스드
function nav_scroll () {
  $(window).scroll(function(){
    if ( document.body.clientHeight >= 2000 ) {
      var y = window.scrollY
      const nav = $(".head_top")
      if (y>=450) {
        nav.addClass('head_fix')
      }
      else {
        nav.removeClass('head_fix')
      }
    }
  });
}

nav_scroll()