<?php

/*
archive
*/

get_header(); ?>
<main>
    <?php if ( have_posts() ) : ?>
    <section class="news">
        <div class="container">
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col">
                        <article class="card">
                            <?php the_post_thumbnail('thumbnail');?>
                            <div class="card__body">
                                <?php the_title('<h5 class="card__title">','</h5>')?>
                                <?php echo apply_filters('the_content',mb_strimwidth(get_the_excerpt(),0,75,'...'));?>
                                <a href="<?php the_permalink();?>" class="btn"><?php _e('Learn more',TEXTDOMAIN)?></a>
                            </div>
                        </article>
                    </div>
                <?php endwhile;?>
            </div>
            <?php get_template_part( 'parts/core/pagination' );?>
        </div>
    </section>
    <?php endif;?>
</main>
<?php get_footer(); ?>
