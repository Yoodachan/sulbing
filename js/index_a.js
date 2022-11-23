let nav_menu = document.getElementsByClassName('nav_menu_btn')[0];
let side_bar = document.getElementsByClassName('side_bar')[0];

let gnb_bottom = document.getElementsByClassName('gnb_bottom')[0];


// 화살표
let user_left = document.getElementsByClassName('fa-caret-left')[0];
let user_down = document.getElementsByClassName('fa-caret-down')[0];
let board_left = document.getElementsByClassName('fa-caret-left')[1];
let board_down = document.getElementsByClassName('fa-caret-down')[1];

let user_menu_wrap = document.getElementsByClassName('user_menu_wrap')[0];
let user_list = document.getElementsByClassName('user_menu_list')[0];
let board_menu_wrap = document.getElementsByClassName('board_menu_wrap')[0];
let board_list = document.getElementsByClassName('board_menu_list')[0];

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


user_menu_wrap.addEventListener('click', function () {
  if ( ( user_down.style.display && board_down.style.display )  == 'block') {
    user_down.style.display = 'none';
    user_left.style.display = 'block';
    user_list.classList.remove('list_off');
    user_list.classList.add('list_on');
  }
  else {
    user_left.style.display = 'none';
    user_down.style.display = 'block';
    user_list.classList.remove('list_on');
    user_list.classList.add('list_off');
  }
})

board_menu_wrap.addEventListener('click', function () {
  if ( ( user_down.style.display && board_down.style.display )  == 'block') {
    board_down.style.display = 'none';
    board_left.style.display = 'block';
    board_list.classList.remove('list_off');
    board_list.classList.add('list_on');
  }
  else {
    board_left.style.display = 'none';
    board_down.style.display = 'block';
    board_list.classList.remove('list_on');
    board_list.classList.add('list_off');
  }
})