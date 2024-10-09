import Swiper from "swiper";
import { Autoplay, EffectFade } from "swiper/modules";

export default () => {
    const heroWrapper = document.querySelector(".hero__slider");
    if (!heroWrapper) return;

    const heroSlider = new Swiper(heroWrapper, {
        modules: [Autoplay, EffectFade],
        slidesPerView: 1, 
        autoplay: {
            disableOnInteraction: false,
            delay: 1500,
        },
        speed: 500,
        spaceBetween: 0,
        effect: 'fade',
    })
};
