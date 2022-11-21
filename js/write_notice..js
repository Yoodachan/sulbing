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
};


let file_del = document.getElementById('file_del');
let file_name = document.getElementsByClassName('file_name')[0];

// file_del.addEventListener('click',function(){
//     if (file_del.checked)  {
//         file_name.style.textDecoration = 'line-through';
//     }
//     else {
//         file_name.style.textDecoration = 'none';
//     }
// })

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