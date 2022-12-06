const questions = document.querySelectorAll(".faq_list")

questions.forEach(function(question) {
    question.addEventListener("click", function() {
        questions.forEach(function(item) {
            if (item !== question) {
                item.classList.remove("active");
            }
        })
        question.classList.toggle("active");
    })
})