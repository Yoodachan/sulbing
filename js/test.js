function navigo (){
document.addEventListener('scroll', onScroll);
 function onScroll () {
    const header = document.querySelector('.header');
    const headerheight = header.clientHeight;
    console.log (headerheight)
    const scrollposition = pageYOffset;
    console.log (scrollposition)
   const nav = document.querySelector('.dd');
   if (headerheight<=scrollposition){
     nav.classList.add('fix')
   }
   else {
     nav.classList.remove('fix');
   }
 } 
  
}
navigo()