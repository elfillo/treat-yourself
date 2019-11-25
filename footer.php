<footer class="foot-page">
    <div class="foot-page__top">
        <div class="container">
            <div class="row foot-page__top-row">
                <!-- Begin logo-vert -->
                <a href="/" class="logo-vert foot-page__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Л" width="88" height="88" class="logo-vert__img">
                    <span class="logo-vert__text">
                        <strong class="logo-vert__label">
                            Лечись
                        </strong>
                        <span class="logo-vert__sublabel">
                            медицинский <br>центр
                        </span>
                    </span>
                </a>
                <!-- Begin logo-vert -->

                <!-- Begin services-menu-->
                <?php wp_nav_menu(array(
                        'theme_location'=>'Service list footer',
                        'container' => 'nav',
                        'container_class' => 'services-menu services-menu_column foot-page__services-menu')
                );?>
                <!-- End services-menu-->

                <div class="foot-page__right">
                    <!-- Begin nav-menu -->
                    <?php wp_nav_menu(array(
                            'theme_location'=>'Main',
                            'container' => 'nav',
                            'container_class' => 'nav-menu foot-page__nav-menu')
                    );?>
                    <!-- End nav-menu -->

                    <div class="row row_align_center foot-page__contacts">
                        <a href="tel:84912300317" class="contact-phone foot-page__contact-phone">
                            <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                                <use xlink:href="img/symbol_sprite.svg#icon-phone"></use>
                            </svg>
                            +7 (4912) 300‒317
                        </a>

                        <div class="time foot-page__time">
                            <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                                <use xlink:href="img/symbol_sprite.svg#icon-time"></use>
                            </svg>
                            10<sup>00</sup>-&nbsp;23<sup>00</sup>
                        </div>
                    </div>

                    <button class="make-an-appointment make-an-appointment_border" data-options='{"touch" : false}'
                            data-fancybox data-src="#feedback">
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="img/symbol_sprite.svg#icon-time"></use>
                        </svg>
                        Записаться на прием
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="foot-page__bottom">
        <div class="container">
            <div class="row">
                <div class="copy">
                    © 2019 «Лечись»
                </div>
                <a href="#" class="policy">
                    Политика конфиденциальности
                </a>
                <a href="#" class="design-dev">
                    Дизайн и разработка: kopelev
                </a>
            </div>
        </div>
    </div>
</footer>

</div>
<?php
    require_once ('parts/views/feedback.php');
    require_once ('parts/views/rewiewPopUp.php');
?>
<?php wp_footer(); ?>
</body>

</html>