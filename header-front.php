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
<<<<<<< HEAD
        <div class="container">
                <div class="header__wrapper">
                <strong class="logo header__logo">
                    <a class="link" href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/logo.svg" width="240" alt="Logo">
                    </a>
                </strong>
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
                <button class="btn header__btn">CONTACT US</button>
            </div>
=======
        <div class="container cont">
            <strong class="logo header__logo">
                <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/logo.svg" width="240" alt="Logo">
                </a>
            </strong>
            <nav class="navbar header__nav">
                <a href="#" class="nav-opener"><span></span></a>
                <ul class="navbar__nav">
                    <li class="current_page_item"><a href="#">Services</a></li>
                    <li>
                        <a href="#">Portfolio</a>
                        <ul class="sub-menu">
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                            <li><a href="#">Link 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </nav>
            <button class="btn header__btn">Contact Us</button>
>>>>>>> 9e29b8cbdb1c00089387a61ed60808f0b1aaa953
        </div>
    </header>
