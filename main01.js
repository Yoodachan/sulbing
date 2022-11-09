
var score = prompt("점수를 입력하시오.")


function test1 () {
    if ( score >= 90 && score <= 100 ) {
        alert("당신의 점수는 "+score+"점이므로 A 등급입니다.");
    }
    if ( score >= 80 && score <= 89 ) {
        alert("당신의 점수는 "+score+"점이므로 B 등급입니다.");
    }
    if ( score >= 70 && score <= 79 ) {
        alert("당신의 점수는 "+score+"점이므로 C 등급입니다.");
    }
    if ( score >= 60 && score <= 69 ) {
        alert("당신의 점수는 "+score+"점이므로 D 등급입니다.");
    }
    if ( score >= 0 && score <= 59 ) {
        alert("당신의 점수는 "+score+"점이므로 F 등급입니다.");
    } 
    else {
        alert ("당신의 점수는 "+score+"점이므로 ERROR 등급입니다.")
    }
}

test1()