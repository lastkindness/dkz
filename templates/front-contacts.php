<?php

/*

Template name: Front Contacts

*/ ?>
<?php get_header('front'); ?>

<section class="contacts">
    <div class="container">
        <div class="contacts__wrapper">
            <div class="contacts__title h1">Contacts</div>
            <div class="contacts__contacts">
                <div class="contacts__contacts-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/map.jpg" alt="" class="contacts__contacts-map">
                </div>
                <div class="contacts__contacts-right">
                    <div class="contacts__contacts-title">phone:</div>
                    <div class="contacts__contacts-text">+38 (050) 53 05 637</div>
                    <div class="contacts__contacts-title">mail:</div>
                    <div class="contacts__contacts-text">hello@gmail.com</div>
                    <div class="contacts__contacts-title">messengers:</div>
                    <div class="contacts__contacts-messengers">
                        <div class="contacts__contacts-round">
                            <span class="contacts__contacts-icon icon-viber"></span>
                        </div>
                        <div class="contacts__contacts-round">
                            <span class="contacts__contacts-icon icon-telegram"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="write-us">
    <div class="container">
        <div class="write-us__wrapper">
            <div class="write-us__title">Write Us</div>
            <div class="write-us__text">Leave a request and we will contact you shortly</div>
            <div class="write-us__inputs">
                <div class="write-us__inputs-left">
                    <input type="text" value="Yor Name" class="write-us__inputs-input">
                    <input type="text" value="Your Phone" class="write-us__inputs-input">
                </div>
                <div class="write-us__inputs-right">
                    <input type="text" value="Yor Name" class="write-us__inputs-input">

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
