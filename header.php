<!DOCTYPE html>
<html lang="ru">
<head>
    <?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="" />
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="" />
</head>
<body>
<body class="page">
<div class="page__wrapper">
    <!-- Begin header -->
    <header class="head-page">
        <div class="head-page__top">
            <div class="container">
                <div class="row row_align-center">

                    <!-- Begin logo-hor -->
                    <a href="/" class="logo-hor head-page__logo">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Л" class="logo-hor__img">
                        <span class="logo-hor__text">
                                <strong>
                                    Лечись
                                </strong>
                                <span>
                                    медицинский центр
                                </span>
                            </span>
                        <h1 class="logo-hor__desc">
                            Официальный представитель <br>
                            клиники “Лимфа” в городе Рязань
                        </h1>
                    </a>
                    <!-- Begin logo-hor -->

                    <!-- Begin nav-menu -->
                    <?php wp_nav_menu(array(
                            'theme_location'=>'Main',
                            'container' => 'nav',
                            'container_class' => 'nav-menu head-page__nav-menu')
                    );?>
                    <!-- End nav-menu -->

                    <a href="tel:<?php the_field('contacts_phone_link', 21)?>" class="contact-phone head-page__contact-phone">
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-phone"></use>
                        </svg>
	                    <?php the_field('contacts_phone', 21)?>
                    </a>

                    <div class="time head-page__time">
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-time"></use>
                        </svg>
	                    <?php
                            $start = get_post_meta(21, 'contacts_start', true);
                            $startH = explode(':', $start)[0];
                            $startM = explode(':', $start)[1];
                            $finish = get_post_meta(21, 'contacts_finish', true);
                            $finishH = explode(':', $finish)[0];
                            $finishM = explode(':', $finish)[1];
	                    ?>
	                    <?php
	                    echo $startH.'<sup>'.$startM.'</sup>'.' - '.$finishH . '<sup>'.$finishM.'</sup>';
	                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="head-page__bottom head-page_fixed">
            <div class="container">
                <div class="row row_align-center head-page__row head-page__row_pl">

                    <a href="/" class="logo-hor logo-hor_l logo-hor_hidden">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Л" class="logo__img">
                        <span class="logo-hor__text">
                                <strong>
                                    Лечись
                                </strong>
                                <span>
                                    медицинский центр
                                </span>
                            </span>
                    </a>

                    <!-- Begin services-menu-->
                    <?php wp_nav_menu(array(
                            'theme_location'=>'Service list',
                            'container' => 'nav',
                            'container_class' => 'services-menu services-menu_row head-page__services-menu')
                    );?>
                    <!-- End services-menu-->

                    <button class="make-an-appointment head-page__make-an-appointment" data-options='{"touch" : false}'
                             id="feedback_header"
                            data-fancybox
                            data-src="#feedback"
                    >
                        <!--data-fancybox
                        data-src="#feedback"-->
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-time"></use>
                        </svg>
                        <span>Записаться на прием</span>
                    </button>

                    <a href="tel:<?php the_field('contacts_phone_link', 21)?>" class="call-us head-page__call-us">
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-phone"></use>
                        </svg>
                    </a>

                    <!-- Begin burger-menu -->
                    <button class="burger-menu head-page__burger-menu">
                        <span class="burger-menu__item"></span>
                    </button>
                    <!-- Begin burger-menu -->
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->

    <!-- Begin mobile-menu -->
    <div class="mobile-menu">
        <h3 class="mobile-menu__title">
            Основные <br>направления центра
        </h3>
	    <?php wp_nav_menu(array(
			    'theme_location'=>'Service list',
			    'container' => 'nav',
			    'container_class' => 'mobile-menu__nav')
	    );?>
        <h3 class="mobile-menu__title">
            О центре
        </h3>
	    <?php wp_nav_menu(array(
			    'theme_location'=>'Main',
			    'container' => 'nav',
			    'container_class' => 'mobile-menu__nav')
	    );?>
    </div>
    <!-- Begin mobile-menu -->

