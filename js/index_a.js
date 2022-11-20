let nav_menu = document.getElementsByClassName('nav_menu_btn')[0];

let gnb_bottom = document.getElementsByClassName('gnb_bottom')[0];





nav_menu.addEventListener('click',function() {
  console.log('dd')
  nav_menu.classList.remove('bar_off');
  gnb_bottom.classList.remove('margin_off');
  nav_menu.classList.add('bar_on');
  gnb_bottom.classList.add('margin_on');
})