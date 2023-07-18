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
                    <div class="map map-container contacts__contacts-map" id="map-contact" data-coord="40.70581134528836, -73.94651731379057"></div>
                </div>
                <div class="contacts__contacts-right">
                    <div class="contacts__contacts-title h4">phone:</div>
                    <div class="contacts__contacts-text h3">+38 (050) 53 05 637</div>
                    <div class="contacts__contacts-title h4">mail:</div>
                    <div class="contacts__contacts-text h3">hello@gmail.com</div>
                    <div class="contacts__contacts-title h4">messengers:</div>
                    <div class="contacts__contacts-messengers">
                        <a class="contacts__contacts-round round share__round">
                            <span class="contacts__contacts-icon share__icon icon icon-viber"></span>
                        </a>
                        <a class="contacts__contacts-round round share__round">
                            <span class="contacts__contacts-icon share__icon icon icon-telegram"></span>
                        </a>
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
            <form class="write-us__inputs">
                <div class="write-us__item">
                    <h6 class="write-us__heading">Yor Name</h6>
                    <input type="text" placeholder="Write your email here" class="write-us__inputs-input">
                </div>
                <div class="write-us__item">
                    <h6 class="write-us__heading">Yor Phone</h6>
                    <input type="text" placeholder="Write your email here" class="write-us__inputs-input">
                </div>
                <div class="write-us__item">
                    <h6 class="write-us__heading">Messengers</h6>
                    <textarea class="write-us__inputs-textarea" placeholder="Write your email here" name="" id=""></textarea>
                </div>
                <button class="write-us__inputs-button btn">send message</button>
            </form>
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
