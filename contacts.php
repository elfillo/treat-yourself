<?php
/*
Template Name: Контакты
*/
?>
<?php get_header()?>
<main class="main-content">

    <section class="contacts-section contacts-section_page">
        <div class="container">

            <!-- Begin breadcrumb -->
            <ul class="breadcrumb">
                <li class="breadcrumb__item">
                    <a class="breadcrumb__link" href="/">
                        Главная
                    </a>
                </li>
                <li class="breadcrumb__item">
                    Контакты
                </li>
            </ul>
            <!-- End breadcrumb -->

            <div class="row contacts-section__row">
                <div id="map" class="contacts-section__map"></div>
                <div class="contacts-section__text">
                    <h2 class="display display_size_big contacts-section__title">
                        Контакты
                    </h2>
                    <a href="tel:84912300317" class="contact-phone contacts-section__contact-phone">
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-phone"></use>
                        </svg>
                        +7 (4912) 300‒317
                    </a>

                    <div class="address contacts-section__address">
                        <svg class="icon" width="15" height="20" viewBox="0 0 17 22">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-pin"></use>
                        </svg>
                        Московский округ, Рязань, <br>Крупской, 25
                    </div>

                    <div class="time contacts-section__time">
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-time"></use>
                        </svg>
                        Режим работы -
                        10<sup>00</sup>-&nbsp;23<sup>00</sup>
                    </div>

                    <div class="socials contacts-section__socials">
                        <a href="/" class="socials__item socials__item_vk">
                            <svg class="icon" viewBox="0 0 80 80">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-vk"></use>
                            </svg>
                        </a>

                        <a href="/" class="socials__item socials__item_inst">
                            <svg class="icon" viewBox="0 0 80 80">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-inst"></use>
                            </svg>
                        </a>

                        Следите <br>за нашими <br>соц-сетями
                    </div>

                    <button class="btn-fill contacts-section__btn-fill">
                        Записаться на прием онлайн
                    </button>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer()?>