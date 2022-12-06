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


// let qa_num = document.getElementsByClassName('qa_wrap').length;
// let q_btn_num = document.getElementsByClassName('q_btn').length;
// let a_btn_num = document.getElementsByClassName('a_btn').length;

// let q_btn_0 = document.getElementsByClassName('q_btn')[0];
// let a_btn_0 = document.getElementsByClassName('a_btn')[0];
// let q_arrow_0 = document.getElementsByClassName('q_arrow')[0];

// q_btn_0.addEventListener('click', function () {
//     q_arrow_0.classList.remove('arrow_off');
//     q_arrow_0.classList.add('arrow_on');
//     a_btn_0.classList.add('fal_on');
// })

// let qa_wrap = document.getElementsByClassName("qa_wrap");
// for (let i = 0; i < qa_wrap.length; i++) {
//     qa_wrap[i].addEventListener("click", function () {
//         /* Toggle between adding and removing the "active" class,
//         to highlight the button that controls the panel */
//         this.classList.toggle("fal_on");
//         /* Toggle between hiding and showing the active panel */
//         let body = this.nextElementSibling;
//         if (body.classList.contains('fal_on')) {
//             body.classList.remove("fal_on");
//         } else {
//             body.classList.add("fal_on");
//         }
//     });
// }


// const qa_wrap = document.querySelectorAll(".qa_wrap")

// qa_wrap.forEach(function(q) {
//     q.addEventListener("click", function() {

//         qa_wrap.forEach(function(a) {
//             if (a !== q) {
//                 a.classList.toggle("fal_on");
//             }
//         })

//         q.classList.remove("fal_on");
//     })
// })

// 1. 반복할 변수 생성
const qa_wrap = document.querySelectorAll(".qa_wrap")

// 2. 변수를 반복하고 파라미터에 담는다.
qa_wrap.forEach(function(q) {
// 3. 반복된 변수의 파라미터를 클릭하면 크기가 변동된다.
    q.addEventListener("click", function() {
        q.classList.toggle("fal_on");
// (클릭한 q는 클래스가 붙었고 나머진 안붙은 상태)
// 4. q에 클래스가 붙어있는 상태로 변수를 반복시킨 상태가 담긴
// 파라미터 a를 생성함
        qa_wrap.forEach(function(a) {
// 5. 현재줄 기준 q에는 클래스가 없고 a는 클래스가 붙었기에 서로 다름
// 그렇기에 q와 다른 a에 붙어있는 클래스를 제거함
            if (a !== q) {
                console.log(q)
                console.log(a)
                a.classList.remove("fal_on");
            }
        })
    })
})




// //질문수의 전체값 저장
// const questions = document.querySelectorAll(".question");

// // 질문수의 전체값만큼 반복
// questions.forEach(function (question) {
//     질문수 만큼 버튼 함수 생성
//   const btn = question.querySelector(".question-btn");
//   // console.log(btn);
//   버튼 누를시
//   btn.addEventListener("click", function () {
//     // console.log(question);
//     질문수만큼 반복
//     questions.forEach(function (item) {
        
//       if (item !== question) {
//         item.classList.remove("show-text");
//       }
//     });
//     question.classList.toggle("show-text");
//   });
// });



// for (let i=0; i < qa_wrap; i++ ) {
//         q_btn[i].addEventListener('click',
//         function() {
//             if (!(a_btn[i].classList.contains('fal_on'))) {
//                 a_btn[i].classList.add('fal_on')
//             }
//             else {
//                 a_btn[i].classList.remove('fal_on')
//             }
//         })
// }

// for (let i=0; i < qa_num; i++ ) {

// }