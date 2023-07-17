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
                    <iframe class="contacts__contacts-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40702.90290108419!2d-74.02733513620187!3d40.69024121836729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z0J3RjNGOLdCZ0L7RgNC6LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1689408668365!5m2!1sru!2sua" width="784" height="442" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
