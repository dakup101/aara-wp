import Swiper from "swiper";
import {Autoplay} from "swiper/modules";

export default () => {
    const carousels = document.querySelectorAll(".offer-carousel__swiper");
    if (!carousels) return;

    carousels.forEach(carousel => {
        const swiper = new Swiper(carousel, {
            modules: [Autoplay],
            slidesPerView: 1.33, 
            spaceBetween: 48,
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },
            breakpoints: {
                468: {
                    slidesPerView: 2.33,
                },
                768: {
                    slidesPerView: 3.33,
                },
                1024: {
                    slidesPerView: 4.33, 
                }
            }
        })
    })
}