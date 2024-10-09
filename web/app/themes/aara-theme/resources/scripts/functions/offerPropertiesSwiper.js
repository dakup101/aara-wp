import Swiper from "swiper";
import {Navigation} from "swiper/modules";

export default () => {
    const properties = document.querySelectorAll(".offer-properties");
    if (!properties) return;

    properties.forEach(propetiesWrapper => {
        const swiper = new Swiper(propetiesWrapper, {
            modules: [Navigation],
            slidesPerView: 1.25, 
            spaceBetween: 18,
            navigation: {
                nextEl: ".swiper-button-next", 
                prevEl: ".swiper-button-prev"
            },
            breakpoints: {
                468: {
                    slidesPerView: 1.50,
                },
                768: {
                    slidesPerView: 3, 
                },
                1024: {
                    slidesPerView: 4,
                }
            }
        })
    })
}