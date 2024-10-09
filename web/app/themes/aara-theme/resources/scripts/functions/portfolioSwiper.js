import Swiper from "swiper";
import {Navigation, Autoplay} from "swiper/modules";

export default () => {
    const properties = document.querySelectorAll(".portfolio__slider");
    if (!properties) return;

    properties.forEach(propetiesWrapper => {

        const only_img = propetiesWrapper.classList.contains("images");

        const swiper = new Swiper(propetiesWrapper, {
            modules: [Navigation, Autoplay],
            slidesPerView: only_img ? 1 : 1, 
            centeredSlides: only_img ? true : false,
            spaceBetween: 32,
            speed: 350,
            navigation: {
                nextEl: ".swiper-button-next", 
                prevEl: ".swiper-button-prev"
            },
            breakpoints: {
                468: {
                    slidesPerView: only_img ? 1 : 1, 
                },
                768: {
                    slidesPerView: only_img ? 1 : 1, 
                },
                1024: {
                    slidesPerView: only_img ? 3 : 1, 
                }
            }
        })
    })
}