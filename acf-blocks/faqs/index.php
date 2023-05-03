<?php if( have_rows('faq') ): ?>
    <div class="faq">
        <div class="container">
            <?php if($faq_block_title=get_field('faq_block_title')):?>
                <h3><?php echo $faq_block_title;?></h3>
            <?php endif;?>
            <div class="handorgel">
                <?php while ( have_rows('faq') ) : the_row(); ?>
                    <?php if($title=get_sub_field('title')):?>
                        <h3 class="handorgel__header">
                            <button class="handorgel__header__button"><?php echo $title;?></button>
                        </h3>
                    <?php endif;?>
                    <?php if($text=get_sub_field('text')):?>
                        <div class="handorgel__content">
                            <div class="handorgel__content__inner">
                                <p><?php echo $text;?></p>
                            </div>
                        </div>
                    <?php endif;?>
                <?php endwhile;?>
            </div>
        </div>
    </div>
<?php endif;?>
