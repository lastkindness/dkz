<?php

/*

Template name: Front Home

*/ ?>
<?php get_header('front'); ?>
<main>

    <section class="hero">
        <div class="container">
            <div class="hero__wrapper">
                <div class="hero__left">
                    <h1 class="hero__left-title">
                        we innovate
                        VISUAL EXPERIENCES
                    </h1>
                    <p class="hero__left-subtitle">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    </p>
                    <button class="hero__left-btn btn">GET STARTED</button>
                </div>
                <div class="hero__right">
                    <div href="#" class="hero__right-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/image141.png" alt="" class="hero__right-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/Group47885.png" alt="" class="hero__right-absolute">
                    </div>
                    <a data-video='{"type": "html5", "video": "<?php echo get_template_directory_uri(); ?>/acf-blocks/video/img/file_example_MP4_480_1_5MG.mp4", "fluidWidth": true}' href="#" class="hero__right-linked watch-video-button">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/triangle.svg" alt="" class="hero__right-play watch-video-button__play">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/Vector.svg" alt="" class="hero__right-words watch-video-button__words curved-img">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe">
        <div class="container">
            <div class="subscribe__wrapper">
                <h2 class="subscribe__title">Subscribe to our news</h2>
                <div class="subscribe__subtitle h4">Stay up to date on the latest marketing ideas!</div>
                <form class="subscribe__input">
                    <input placeholder="Write your email here" type="text" class="subscribe__input-input">
                    <span class="subscribe__input-icon icon icon-mail"></span>
                    <button class="subscribe__input-btn btn"><span class="icon icon-telegram"></span><p class="text">Subscribe</p></button>
                </form>
            </div>
        </div>
    </section>

    <section class="share">
        <div class="container">
            <div class="share__icons">
                <a class="share__round subscribe__round">
                    <span class="share__icon subscribe__icon icon icon-messanger"></span>
                </a>
                <a class="subscribe__round share__round">
                    <span class="share__icon subscribe__icon icon icon-instagram"></span>
                </a>
                <a class="subscribe__round share__round">
                    <span class="share__icon subscribe__icon icon icon-facebook"></span>
                </a>
                <a class="subscribe__round share__round">
                    <span class="share__icon subscribe__icon icon icon-linkedin"></span>
                </a>
            </div>
        </div>
    </section>


    <section class="about-us">
        <div class="container">
            <div class="about-us__wrapper">
                <div class="about-us__pictures">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/holecolor.jpg" alt="" class="about-us__pictures-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/archer.png" alt="" class="about-us__pictures-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/hole.jpg" alt="" class="about-us__pictures-item">
                </div>
                <div class="about-us__description">
                    <h2 class="about-us__description-title">About Us</h2>
                    <h4 class="about-us__description-subtitle">Passionate AV Experts</h4>
                    <p class="about-us__description-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="about-us__description-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                    <div class="about-us__bottom">
                        <div class="about-us__bottom-item">
                            <div class="about-us__bottom-title h3">8K +</div>
                            <p class="about-us__bottom-text">Happy Customer</p>
                        </div>
                        <div class="about-us__bottom-item">
                            <div class="about-us__bottom-title h3">24 +</div>
                            <p class="about-us__bottom-text">Awards Winning</p>
                        </div>
                        <div class="about-us__bottom-item">
                            <div class="about-us__bottom-title h3">28 +</div>
                            <p class="about-us__bottom-text">Years of Experience</p>
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


</main>
<?php get_footer('front'); ?>
