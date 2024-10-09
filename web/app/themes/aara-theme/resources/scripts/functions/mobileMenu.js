export default () => {
    const trigger = document.querySelector(".header__mobile-trigger");
    const nav = document.querySelector(".header__nav");

    let is_active = false;

    trigger.addEventListener("click", (ev) => {
        is_active = !is_active;

        nav.classList.remove("show");
        trigger.classList.remove("active");

        if (is_active) {
            nav.classList.add("show");
            trigger.classList.add("active");
        }
    })

}