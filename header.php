<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body
    <?php if($bg_general=get_field('body_general','options')):?>
        style="background-image: url('<?php echo $bg_general;?>')"
    <?php endif;?>

    <?php body_class(); ?>>
<div id="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <?php if($header_logo=get_field('logo','option-header')):?>
                    <a class="logo header__logo" href="<?php echo home_url(); ?>">
                        <img src="<?php echo $header_logo['url'];?>" alt="<?php echo $header_logo['alt'];?>">
                    </a>
                <?php endif;?>
                <nav class="navbar header__nav">
                    <div class="nav-opener">
                        <div class="icon icon-burger">
                            <span></span>
                        </div>
                    </div>
                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'menu'            => '',
                        'container'       => 'ul',
                        'container_class' => 'navbar__nav',
                        'container_id'    => '',
                        'menu_class'      => 'navbar',
                        'menu_id'         => '',
                        'echo'            => true,
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '%3$s',
                        'depth'           => 0,
                        'walker'          => '',
                    ]);?>
                </nav>
                <?php if($header_btn=get_field('btn','option-header')):?>
                    <div data-popup="hidden-content" class="btn header__btn"><?php echo $header_btn;?></div>
                <?php endif;?>
            </div>
        </div>
    </header>
