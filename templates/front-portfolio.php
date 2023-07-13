<?php

/*

Template name: Front Portfolio

*/ ?>
<?php get_header('front'); ?>

<section class="portfolio">
    <div class="container">
        <div class="portfolio__wrapper">
            <div class="portfolio__title h1">Our Portfolio</div>
            <p class="portfolio__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point</p>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="gallery__wrapper swiper">
        <div class="gallery__gallery swiper-wrapper">
            <div class="swiper-slide gallery__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/drone.jpg" class="gallery__img" alt="Image 1">
            </div>
            <div class="gallery__item swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/proart.jpg" class="gallery__img" alt="Image 2">
            </div>
            <div class="gallery__item swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/robot.jpg" class="gallery__img" alt="Image 3">
            </div>
            <div class="gallery__item swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/stand.jpg" class="gallery__img" alt="Image 2">
            </div>
            <div class="gallery__item swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/hall.jpg" class="gallery__img" alt="Image 3">
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="gallery__wrapper swiper">
        <div class="gallery__gallery swiper-wrapper">
            <div class="gallery__item swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/drone.jpg" class="gallery__img" alt="Image 1">
            </div>
            <div class="gallery__item swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/proart.jpg" class="gallery__img" alt="Image 2">
            </div>
            <div class="gallery__item swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/robot.jpg" class="gallery__img" alt="Image 3">
            </div>
            <div class="gallery__item swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/stand.jpg" class="gallery__img" alt="Image 4">
            </div>
            <div class="gallery__item swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/hall.jpg" class="gallery__img" alt="Image 5">
            </div>
        </div>
    </div>
</section>



<?php get_footer('front'); ?>
