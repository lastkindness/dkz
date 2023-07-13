<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/src/img/main.jpg')" <?php body_class(); ?>>
<div id="wrapper">
    <header class="header">
        <div class="container">
                <div class="header__wrapper">
                <a href="#" class="logo header__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/logo.svg" width="240" alt="Logo">
                </a>
                <nav class="navbar header__nav">
                    <a href="#" class="nav-opener"><span></span></a>
                    <ul class="navbar__nav">
                        <li><a href="#" class="current_page_item">SERVICES</a></li>
                        <li>
                            <a href="#">PORTFOLIO</a>
                            <ul class="sub-menu">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                                <li><a href="#">Link 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">CONTACTS</a></li>
                    </ul>
                </nav>
                <a href="#" class="btn header__btn">CONTACT US</a>
            </div>
        </div>
    </header>
