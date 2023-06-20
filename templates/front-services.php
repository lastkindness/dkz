<?php

/*

Template name: Front Services

*/ ?>
<?php get_header('front'); ?>

<section class="heading">
    <div class="container">
        <div class="heading__wrapper">
            <h1 class="heading__title">Our Services</h1>
            <p class="heading__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point</p>
            <a href="#" class="heading__linked watch-video-button">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/triangle.svg" alt="" class="heading__linked-play watch-video-button__play">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/Vector.svg" alt="" class="heading__linked-words watch-video-button__words">
            </a>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="services__wrapper">
            <div class="services__grid">
                <a href="#" class="services__grid-item card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/archer.png" alt="" class="services__grid-img">
                    <div class="services__grid-title card__title h4">Audio & Visual consultation</div>
                    <div class="services__grid-text card__text p">Let us sit down with you and talk about your vision. Do you have questions about your current plan? Do you have an upcoming project that needs a AV solutions? With a consultation, we can get you on the right track.</div>
                    <div  class="services__grid-quadro card__icon">
                        <p class="services__grid-view card__icon-text">view more</p>
                    </div>
                </a>
                <a href="#" class="services__grid-item card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/hole.jpg" alt="" class="services__grid-img">
                    <div class="services__grid-title card__title h4">Studio Video Production</div>
                    <div class="services__grid-text card__text p">Virtual production specialists.</div>
                    <div class="services__grid-quadro card__icon">
                        <p class="services__grid-view card__icon-text">view more</p>
                    </div>
                </a>
                <a href="#" class="services__grid-item card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/space.jpg" alt="" class="services__grid-img">
                    <div class="services__grid-title card__title h4">Custom content creation</div>
                    <div class="services__grid-text card__text p">Content is The King!</div>
                    <div class="services__grid-quadro card__icon">
                        <p class="services__grid-view card__icon-text">view more</p>
                    </div>
                </a>
                <a href="#" class="services__grid-item card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/digital.jpg" alt="" class="services__grid-img">
                    <div class="services__grid-title card__title h4">Previzualisation</div>
                    <div class="services__grid-text card__text p">Project 3D previsualisation</div>
                    <div class="services__grid-quadro card__icon">
                        <p class="services__grid-view card__icon-text">view more</p>
                    </div>
                </a>
                <a href="#" class="services__grid-item card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/hall.jpg" alt="" class="services__grid-img">
                    <div class="services__grid-title card__title h4">Corporate Events</div>
                    <div class="services__grid-text card__text p">Virtual production specialists.</div>
                    <div class="services__grid-quadro card__icon">
                        <p class="services__grid-view card__icon-text">view more</p>
                    </div>
                </a>
                <a href="#" class="services__grid-item card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/scene.jpg" alt="" class="services__grid-img">
                    <div class="services__grid-title card__title h4">Conventions and Exhibitions</div>
                    <div class="services__grid-text card__text p">Video services for conventions and Exhibitions</div>
                    <div class="services__grid-quadro card__icon">
                        <p class="services__grid-view card__icon-text">view more</p>
                    </div>
                </a>
                <a href="#" class="services__grid-item card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/cinema.jpg" alt="" class="services__grid-img">
                    <div class="services__grid-title card__title h4">Festival Visual Support</div>
                    <div class="services__grid-text card__text p">Video Gear, Installation, Operation & visual design.</div>
                    <div class="services__grid-quadro card__icon">
                        <p class="services__grid-view card__icon-text">view more</p>
                    </div>
                </a>
                <a href="#" class="services__grid-item card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/holecolor.jpg" alt="" class="services__grid-img">
                    <div class="services__grid-title card__title h4">Studio Gear rentals</div>
                    <div class="services__grid-text card__text p">Media servers, video switchers & video processing gear.</div>
                    <div class="services__grid-quadro card__icon">
                        <p class="services__grid-view card__icon-text">view more</p>
                    </div>
                </a>
            </div>
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
