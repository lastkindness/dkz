<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
    <header class="header">
        <div class="container">
            <?php if($header_logo=get_field('logo','option-header')):?>
                <strong class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo $header_logo['url'];?>" alt="<?php echo $header_logo['alt'];?>">
                    </a>
                </strong>
            <?php endif;?>
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'menu'            => '',
                'container'       => 'nav',
                'container_class' => 'navbar',
                'container_id'    => '',
                'menu_class'      => 'navbar',
                'menu_id'         => '',
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<a href="#" class="nav-opener"><span></span></a><ul class="navbar__nav">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ] );
            ?>
        </div>
    </header>
