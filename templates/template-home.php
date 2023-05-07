<?php

/*

Template name: Home

*/ ?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part( 'acf-blocks/blog-post/index' );
    get_template_part( 'acf-blocks/columns-cards/index' );
    get_template_part( 'acf-blocks/counter/index' );
    get_template_part( 'acf-blocks/cta/index' );
    get_template_part( 'acf-blocks/faqs/index' );
    get_template_part( 'acf-blocks/gallery/index' );
    get_template_part( 'acf-blocks/hero/index' );
    get_template_part( 'acf-blocks/masonry/index' );
    get_template_part( 'acf-blocks/news/index' );
    get_template_part( 'acf-blocks/parallax/index' );
    get_template_part( 'acf-blocks/partners/index' );
    get_template_part( 'acf-blocks/quote/index' );
    get_template_part( 'acf-blocks/scrollbar/index' );
    get_template_part( 'acf-blocks/tabs/index' );
    get_template_part( 'acf-blocks/team/index' );
    get_template_part( 'acf-blocks/two-columns/index' );
    get_template_part( 'acf-blocks/video/index' );
    ?>
</main>
<?php get_footer(); ?>
