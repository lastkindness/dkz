<?php if( have_rows('news') ): ?>
    <section class="news">
        <div class="container">
            <div class="row">
                <?php while ( have_rows('news') ) : the_row(); ?>
                    <div class="col">
                        <article class="card">
                            <?php if($image=get_sub_field('image')):?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
                            <?php endif;?>
                            <div class="card__body">
                                <?php if($title=get_sub_field('title')):?>
                                    <h5 class="card__title"><?php echo $title; ?></h5>
                                <?php endif;?>
                                <?php if($text=get_sub_field('text')):?>
                                    <p class="card__text"><?php echo $text;?></p>
                                <?php endif;?>
                                <?php if($link=get_sub_field('link')):?>
                                    <a href="<?php echo $link['url'];?>" class="btn" target="<?php echo $link['target'];?>"><?php echo $link['title'];?></a>
                                <?php  endif;?>
                            </div>
                        </article>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </section>
<?php endif;?>
