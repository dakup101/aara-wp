export default () => {
    const FAQs = document.querySelectorAll(".faq");
    if (!FAQs) return;
    
    FAQs.forEach(FAQ => {
        const items = FAQ.querySelectorAll(".faq__item");

        items.forEach(item => {
            let is_active = false;

            const question = item.querySelector(".faq__question");
            const answer = item.querySelector(".faq__answer");

            question.addEventListener("click", (ev) => {
                ev.preventDefault(); 
                is_active = !is_active;

                question.classList.remove("active");
                answer.classList.remove("show");
                answer.style.height = "0px";

                if (is_active) {
                    question.classList.add("active");
                    answer.classList.add("show");
                    answer.style.height = answer.scrollHeight + "px";
                }
            })
        })
    })
    
}