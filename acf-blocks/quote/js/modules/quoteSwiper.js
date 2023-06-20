import Swiper from 'swiper/swiper-bundle';

export default () => {
    console.log("test");
    if (jQuery('.quote__slider').length) {
        const swiper = new Swiper(".quote__slider", {
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
