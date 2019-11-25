<?php
/*
Template Name: Спасибо
*/
?>
<?php get_header(); ?>
    <div class="page__wrapper">
        <section class="success-page">
            <div class="container">
                <div class="row success-page__row">
                    <div class="success-page__left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/static/modal-bg.png">
                        <div class="badge success-page__badge">
                            <div class="badge__name">
                                Алена
                            </div>
                            <div class="badge__position">
                                администратор
                            </div>
                        </div>
                    </div>
                    <div class="success-page__right">
                        <!-- Begin logo-hor -->
                        <a href="/" class="logo-hor success-page__logo">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logo_white.svg" alt="Л" class="logo-hor__img">
                        </a>
                        <!-- Begin logo-hor -->
                        <h3 class="dispaly display_size_big success-page__title">
                            Спасибо, за заявку
                        </h3>
                        <p class="success-page__subtitle">
                            Наш администратор свяжется с вами в ближайшее время для подтверждения записи и срадостью ответит на ваши вопросы.
                        </p>
                        <div class="socials success-page__socials">
                            <a href="/" class="socials__item socials__item_vk">
                                <svg class="icon" viewBox="0 0 80 80">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-vk-white"></use>
                                </svg>
                            </a>

                            <a href="/" class="socials__item socials__item_inst">
                                <svg class="icon" viewBox="0 0 80 80">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-inst-white"></use>
                                </svg>
                            </a>

                            <span class="socials__text">
                                Следите <br>за нашими <br>соц-сетями
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer()?>