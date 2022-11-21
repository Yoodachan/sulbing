let nav_menu = document.getElementsByClassName('nav_menu_btn')[0];
let side_bar = document.getElementsByClassName('side_bar')[0];

let gnb_bottom = document.getElementsByClassName('gnb_bottom')[0];


let board_up = document.getElementsByClassName('fa-caret-up')[0];
let board_down = document.getElementsByClassName('fa-caret-down')[0];


nav_menu.addEventListener('click',function() {
  if (side_bar.classList.contains('bar_off')) {
    side_bar.classList.remove('bar_off');
    gnb_bottom.classList.remove('margin_off');
    side_bar.classList.add('bar_on');
    gnb_bottom.classList.add('margin_on');
  }
  else {
    side_bar.classList.add('bar_off');
    gnb_bottom.classList.add('margin_off');
    side_bar.classList.remove('bar_on');
    gnb_bottom.classList.remove('margin_on');
  }
})