import Swiper from 'swiper/swiper-bundle';

export default () => {
    if (jQuery('.gallery__wrapper').length) {
        const swiper = new Swiper(".gallery__wrapper", {
            slidesPerView: 'auto',
            spaceBetween: 50,
        });
    }
};
