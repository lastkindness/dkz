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
                    <a href="#" class="hero__right-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/robot.svg" alt="" class="hero__right-img"></a>
                    <a href="#" class="hero__right-linked">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/triangle.svg" alt="" class="hero__right-play">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/Vector.svg" alt="" class="hero__right-words">
                    </a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/back.svg" alt="" class="hero__back">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/background.svg" alt="" class="hero__background">
            </div>
        </div>
    </section>


    <section class="about">
        <div class="container">
            <div class="about__wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/gradient.svg" alt="" class="about__background">
                <div class="about__container">
                    <h1 class="about__title">need to help?</h1>
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
