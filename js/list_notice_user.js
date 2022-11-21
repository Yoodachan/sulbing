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


let tab_main = document.getElementsByClassName('tab_all')[0];
let tab_news = document.getElementsByClassName('tab_news')[0];
let tab_notice = document.getElementsByClassName('tab_notice')[0];

let tab_link = location.href.split("?")[1];
let cate_main = undefined;
let cate_news = "cate=news";
let cate_notice = "cate=notice";



tab_main.addEventListener('click', function () {
    if ( tab_link != cate_main ) {
        location.href = "list_user.php";
    }
});

tab_news.addEventListener('click', function () {
    if ( tab_link != cate_news ) {
        location.href = "list_user.php?cate=news";
    }
});

tab_notice.addEventListener('click', function () {
    if ( tab_link != cate_notice ) {
        location.href = "list_user.php?cate=notice";
    }
});

window.addEventListener('load', function () {
    // 메인
    if ( ( tab_link == undefined) && ((tab_link != cate_news) && (tab_link != cate_notice)) ) {
        tab_main.classList.add('tab_menu_on');
        tab_notice.classList.add('tab_menu_off');
        tab_news.classList.add('tab_menu_off');

    }
    // 뉴스
    if ((tab_link == cate_news) && ( (tab_link != undefined) && (tab_link != cate_notice) )) {
        tab_news.classList.add('tab_menu_on');
        tab_main.classList.add('tab_menu_off');
        tab_notice.classList.add('tab_menu_off');

    }
    // 공지
    if ((tab_link == cate_notice) && ( (tab_link != undefined) && (tab_link != cate_news) )) {
        tab_notice.classList.add('tab_menu_on');
        tab_main.classList.add('tab_menu_off');
        tab_news.classList.add('tab_menu_off');
    }
})


function remove_notice(g_no){
    var ck = confirm("정말 삭제하시겠습니까?ㅎ");
    if(ck){
        location.href="delete.php?n_idx="+g_no;
    };
};


