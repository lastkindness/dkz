<div class="popups">
    <section id="hidden-content" class="write-us popup">
        <div class="container">
            <div class="write-us__wrapper">
                <div class="popup-close"></div>
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
</div>

<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <?php if($footer_logo=get_field('footer_logo','option-footer')):?>
                <a class="footer__logo" href="<?php echo home_url(); ?>">
                    <img src="<?php echo $footer_logo['url'];?>" alt="<?php echo $footer_logo['alt'];?>">
                </a>
            <?php endif;?>
            <?php if($social=get_field('social','option-footer')):?>
                <div class="share__icons footer__icons">
                    <?php foreach ($social as $item):?>
                        <?php if($link=$item['link']):?>
                            <a class="share__round footer__round" href="<?php echo $link;?>" target="_blank">
                                <span class="share__icon footer__icon icon icon-<?php echo $item['icon']?>"></span>
                            </a>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
            <?php if($footer_copyright=get_field('copyright','option-footer')):?>
                <p class="footer__text"><?php echo $footer_copyright;?></p>
            <?php endif;?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>
