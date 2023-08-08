<?php

/*

Template name: Front About Us

*/ ?>
<?php get_header('front'); ?>

<section class="about-us-page">
    <div class="container">
        <div class="about-us-page__wrapper">
            <div class="about-us-page__descr">
                <div class="about-us-page__descr-title h1">About Us</div>
                <p class="about-us-page__descr-text p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                </p>
                <p class="about-us-page__descr-text p">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
            </div>
            <div class="about-us-page__navigation">
                <a href="#" class="about-us-page__navigation-link p">About Us</a>
                <a href="#" class="about-us-page__navigation-link p">What we do</a>
                <a href="#" class="about-us-page__navigation-link p">Our team</a>
                <a href="#" class="about-us-page__navigation-link p">Video</a>
            </div>
        </div>
    </div>
</section>

<section class="banner">
    <div class="banner__wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/banner.jpg" alt="" class="banner__img">
    </div>
</section>

<section class="run-line">
    <div class="run-line__wrapper" data-ticker="list">
        <div class="run-line__item" data-ticker="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/green.svg" alt="" class="run-line__item-img">
            <div class="run-line__item-text h6">Studio Video Production</div>
        </div>
        <div class="run-line__item" data-ticker="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/pink.svg" alt="" class="run-line__item-img">
            <div class="run-line__item-text h6">Previzualisation</div>
        </div>
        <div class="run-line__item" data-ticker="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/blue.svg" alt="" class="run-line__item-img">
            <div class="run-line__item-text h6">Custom Content creation</div>
        </div>
        <div class="run-line__item" data-ticker="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/red.svg" alt="" class="run-line__item-img">
            <div class="run-line__item-text h6">Conventions & Exhibitions</div>
        </div>
        <div class="run-line__item" data-ticker="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/violet.svg" alt="" class="run-line__item-img">
            <div class="run-line__item-text h6">Corporate Events</div>
        </div>
    </div>
</section>

<section class="what-we">
        <div class="what-we__wrapper">
            <div class="what-we__left">
                <div class="what-we__left-title h2">What we do</div>
                <p class="what-we__left-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p class="what-we__left-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                <p class="what-we__left-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type </p>
                <button class="what-we__left-btn btn">Contact Us</button>
            </div>
            <div class="what-we__right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/archer.jpg" alt="" class="what-we__right-img">
            </div>
        </div>
</section>

<section class="about-us">
    <div class="container">
        <div class="about-us__wrapper">
            <div class="about-us__pictures">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/female.jpg" alt="" class="about-us__pictures-items">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/male.jpg" alt="" class="about-us__pictures-items">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/male2.jpg" alt="" class="about-us__pictures-items">
            </div>
            <div class="about-us__description">
                <h2 class="about-us__description-title">The Team</h2>
                <p class="about-us__description-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p class="about-us__description-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                <p class="about-us__description-text">Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <div class="about-us__bottom">
                    <div class="about-us__bottom-item">
                        <div class="about-us__bottom-title h3">4013</div>
                        <p class="about-us__bottom-text">Satisfied customers</p>
                    </div>
                    <div class="about-us__bottom-item">
                        <div class="about-us__bottom-title h3">500+</div>
                        <p class="about-us__bottom-text">Completed projects</p>
                    </div>
                    <div class="about-us__bottom-item">
                        <div class="about-us__bottom-title h3">10 years</div>
                        <p class="about-us__bottom-text">Work experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="helicopter" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/helicopter.jpg')">
    <div class="container">
        <div class="helicopter__wrapper">
            <div class="helicopter__text">
                <div class="helicopter__text-title h3">Watch video</div>
                <p class="helicopter__text-text p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/striple.svg" alt="" class="helicopter__vector">
            <a href="#" data-video='{"type": "html5", "video": "<?php echo get_template_directory_uri(); ?>/acf-blocks/video/img/file_example_MP4_480_1_5MG.mp4", "fluidWidth": true}' class="helicopter__linked watch-video-button">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/triangle.svg" alt="" class="helicopter__linked-play watch-video-button__play">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/Vector.svg" alt="" class="helicopter__linked-words watch-video-button__words curved-img">
            </a>
        </div>
    </div>
</section>

<section class="quote">
    <div class="container">
        <h2 class="quote__heading">reviews</h2>
        <div class="quote__slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <blockquote class="blockquote">
                        <div class="quote__heads">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/avatar.jpg" alt="" class="quote__heads-img">
                            <div class="quote__heads-title h4">Tom Hardy</div>
                            <p class="quote__heads-text">Satisfied customer</p>
                        </div>
                        <p class="quote__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </blockquote>
                </div>
                <div class="swiper-slide">
                    <blockquote class="blockquote">
                        <div class="quote__heads">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/avatar.jpg" alt="" class="quote__heads-img">
                            <div class="quote__heads-title h4">Tom Hardy</div>
                            <p class="quote__heads-text p">Satisfied customer</p>
                        </div>
                        <p class="quote__text">A well-known quote, contained in a blockquote element. A well-known quote, contained in a blockquote element. A well-known quote, contained in a blockquote element. A well-known quote, contained in a blockquote element. A well-known quote, contained in a blockquote element. A well-known quote, contained in a blockquote element. A well-known quote, contained in a blockquote element. A well-known quote, contained in a blockquote element.</p>
                    </blockquote>
                </div>
            </div>
            <div class="swiper-button-next next"></div>
            <div class="swiper-button-prev prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>


<section class="about" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/gradient.svg')">
    <div class="container">
        <div class="about__wrapper">
            <div class="about__box">
                <h2 class="about__title h1">need to help?</h2>
                <div class="about__column">
                    <div class="about__column-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/guard.svg" alt="" class="about__column-icon">
                        <div class="about__column-support">Support 24/7</div>
                    </div>
                    <p class="about__column-text">Lorem Ipsum is simply dummy</p>
                </div>
                <button class="about__btn btn">Contact us</button>
            </div>
        </div>
    </div>
</section>


<?php get_footer('front'); ?>
