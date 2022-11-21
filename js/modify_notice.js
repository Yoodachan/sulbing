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


function notice_check(){
    var n_title = document.getElementById("n_title");
    var n_content = document.getElementById("n_content");

    if(!n_title.value){
        alert("제목을 입력하세요.");
        n_title.focus();
        return false;
    };

    if(!n_content.value){
        alert("내용을 입력하세요.");
        n_content.focus();
        return false;
    };

    if( (n_cate_news.disabled && n_cate_notice.disabled) ==  true){
        alert("카테고리 체크는 필수입니다.");
        n_content.focus();
        return false;
    };

};

let cate_news_btn = document.getElementsByClassName('cate_news_btn')[0];
let cate_notice_btn = document.getElementsByClassName('cate_notice_btn')[0];

let n_cate_news = document.getElementById('n_cate_news');
let n_cate_notice = document.getElementById('n_cate_notice');

let news_style = document.getElementsByClassName('fa-check')[0].style;
let notice_style = document.getElementsByClassName('fa-check')[1].style;

cate_news_btn.addEventListener('click', function () {
    n_cate_news.disabled = false;
    news_style.display = 'inline';

    cate_news_btn.classList.remove('check_off');
    cate_news_btn.classList.add('check_on');

    if ( n_cate_notice.disabled == false && (notice_style.display = 'inline') ) {
        n_cate_notice.disabled = true;
        notice_style.display = 'none';

        cate_notice_btn.classList.remove('check_on');
        cate_notice_btn.classList.add('check_off');
    }


})


cate_notice_btn.addEventListener('click', function () {
    n_cate_notice.disabled = false;
    notice_style.display = 'inline';

    cate_notice_btn.classList.remove('check_off');
    cate_notice_btn.classList.add('check_on');

    if ( n_cate_news.disabled == false && (news_style.display = 'inline') ) {
        n_cate_news.disabled = true;
        news_style.display = 'none';

        cate_news_btn.classList.remove('check_on');
        cate_news_btn.classList.add('check_off');
    }
})


window.addEventListener('load', function () {
    // 뉴스 체크
    if (n_cate_news.checked) {
        n_cate_news.disabled = false;
        news_style.display = 'inline';
        cate_news_btn.classList.remove('check_off');
        cate_news_btn.classList.add('check_on');
        
    }
    // 공지 체크
    else {
        n_cate_notice.disabled = false;
        notice_style.display = 'inline';
        cate_notice_btn.classList.remove('check_off');
        cate_notice_btn.classList.add('check_on');
        
    }
})



let file_del = document.getElementById('file_del');
let file_name = document.getElementsByClassName('file_name')[0];


let file = document.getElementById('up_file');

file.addEventListener('change', function () {
    //input file 태그.
    //파일 경로.
    var filePath = file.value;
    //전체경로를 \ 나눔.
    var filePathSplit = filePath.split('\\'); 
    //전체경로를 \로 나눈 길이.
    var filePathLength = filePathSplit.length;
    //마지막 경로를 .으로 나눔.
    var fileNameSplit = filePathSplit[filePathLength-1].split('.');
    //파일명 : .으로 나눈 앞부분
    var fileName = fileNameSplit[0];
    //파일 확장자 : .으로 나눈 뒷부분
    var fileExt = fileNameSplit[1];


    file_name.innerText = fileName+'.'+fileExt;
    
}
)