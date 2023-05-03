<footer class="footer">
    <div class="container">
        <?php if($footer_logo=get_field('footer_logo','option-footer')):?>
            <strong class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo $footer_logo['url'];?>" alt="<?php echo $footer_logo['alt'];?>">
                </a>
            </strong>
        <?php endif;?>
        <?php if($social=get_field('social','option-footer')):?>
            <ul class="social">
                <?php foreach ($social as $item):?>
                    <?php if($link=$item['link']):?>
                        <li>
                            <a href="<?php echo $link;?>" target="_blank"><i class="icon-<?php echo $item['icon']?>"></i></a>
                        </li>
                    <?php endif;?>
                <?php endforeach;?>
            </ul>
        <?php endif;?>
    </div>
    <button type="button" id="back-to-top"><i class="icon-chevron-up"></i></button>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>
