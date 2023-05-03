<?php get_header();?>
<?php if ( have_posts() ) : ?>
    <main>
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile;?>
        </div>
    </main>
<?php endif;?>
<?php get_footer();