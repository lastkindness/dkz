import Swiper from 'swiper/swiper-bundle';

export default () => {
    if (jQuery('.hero__slider').length) {
        const swiper = new Swiper(".hero__slider", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }
};
