<?php
/**
 * 404 template
 */
get_header();?>
<main>
    <div class="container">
        <div class="error__wrapper">
            <span class="error__title h1"><?php _e( '404', TEXTDOMAIN ); ?></span>
            <p class="error__subtitle h4"><?php _e( 'Ooops! Page not Found', TEXTDOMAIN ); ?></p>
            <?php get_search_form();?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
