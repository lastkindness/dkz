<?php if( have_rows('gallery') ): ?>
    <section class="gallery">
        <div class="container">
            <?php if($title=get_field('title')):?>
                <h2><?php echo $title;?></h2>
            <?php endif;?>
            <div class="row">
                <?php while (have_rows('gallery') ) : the_row(); ?>
                    <?php if($image=get_sub_field('image')):?>
                        <div class="col">
                            <a href="<?php echo $image['url'];?>" class="glightbox">
                                <img src="<?php echo $image['url'];?>" title="<?php echo $image['title'];?>" alt="<?php echo $image['alt'];?>">
                            </a>
                        </div>
                    <?php endif;?>
                <?php endwhile;?>
            </div>
        </div>
    </section>
<?php endif;?>
