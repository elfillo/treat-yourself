<?php get_header(); ?>
    <main class="main-content">

    <section class="carousel-section">
        <div class="swiper-container carousel-section__carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide carousel-section__slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/admin/slide.jpg);">
                    <div class="container">
                        <h2 class="carousel-section__title">
                            Многофункциональный <br>медицинский центр <br>с высокой экспертизой <br>в лечении лимфомы
                        </h2>
                    </div>
                </div>
                <div class="swiper-slide carousel-section__slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/admin/slide.jpg);">
                    <div class="container">
                        <h2 class="carousel-section__title">
                            Многофункциональный <br>медицинский центр <br>с высокой экспертизой <br>в лечении лимфомы
                        </h2>
                    </div>
                </div>
                <div class="swiper-slide carousel-section__slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/admin/slide.jpg);">
                    <div class="container">
                        <h2 class="carousel-section__title">
                            Многофункциональный <br>медицинский центр <br>с высокой экспертизой <br>в лечении лимфомы
                        </h2>
                    </div>
                </div>
                <div class="swiper-slide carousel-section__slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/admin/slide.jpg);">
                    <div class="container">
                        <h2 class="carousel-section__title">
                            Многофункциональный <br>медицинский центр <br>с высокой экспертизой <br>в лечении лимфомы
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits">
        <div class="container">
            <div class="row benefits__row">
                <div class="benefits__col">
                    <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon1.svg" class="benefits__img_man" width="47" height="60">
                    <div class="benefits__desc">
                        <h3 class="benefits__label">
                            Ценим доверие
                        </h3>
                        <p class="benefits__text">
                            Обьясняем диагноз и схему <br>лечения, пишем разборчиво
                        </p>
                    </div>
                </div>
                <div class="benefits__col">
                    <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon2.svg" class="benefits__img_man" width="47" height="60">
                    <div class="benefits__desc">
                        <h3 class="benefits__label">
                            6 докторов
                        </h3>
                        <p class="benefits__text">
                            Специалисты общей практики <br>и узкопрофильные врачи
                        </p>
                    </div>
                </div>
                <div class="benefits__col">
                    <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon3.svg" class="benefits__img_man" width="47" height="60">
                    <div class="benefits__desc">
                        <h3 class="benefits__label">
                            Удобное расположение
                        </h3>
                        <p class="benefits__text">
                            Стараемся быть ближе <br>к нашим пациентам
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sertificates">
        <div class="container">
            <div class="row sertificates__row">
                <div class="sertificates__desc">
                    <h2 class="display display_size_big sertificates__title">
                        Медицинский центр
                    </h2>
                    <p class="text sertificates__text">
                        Попасть в нашу команду могут только лучшие специалисты с многолетней практикой и доказанным
                        опытом. Наши врачи не только лечат. Они помогают сохранить здоровье и находят подход и ко всем
                        пациентам.
                    </p>
                    <div class="swiper-container sertifaicates__list">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide sertificates__item">
                                <a href="<?php echo get_template_directory_uri() ?>/img/static/lic1.png" data-fancybox="lic">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/static/lic1.png" alt="Скан лицензии">
                                </a>
                            </div>
                            <div class="swiper-slide sertificates__item">
                                <a href="<?php echo get_template_directory_uri() ?>/img/static/lic2.png" data-fancybox="lic">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/static/lic2.png" alt="Скан лицензии">
                                </a>
                            </div>
                            <div class="swiper-slide sertificates__item">
                                <a href="<?php echo get_template_directory_uri() ?>/img/static/lic3.png" data-fancybox="lic">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/static/lic3.png" alt="Скан лицензии">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sertificates__thumb"><img src="<?php echo get_template_directory_uri() ?>/img/static/L+2.png" alt=""></div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <div class="row team-section__head">
                <h2 class="display display_size_big team-section__title">
                    Лучшие врачи Рязани
                </h2>
                <a href="/team.html" class="show-more team-section__show-more">
                    все специалисты центра
                </a>
            </div>
            <p class="text team-section__text">
                Попасть в нашу команду могут только лучшие специалисты с многолетней практикой и доказанным
                опытом. <br>Наши врачи не только лечат. Они помогают сохранить здоровье и находят подход и ко
                всем пациентам.
            </p>

            <div class="team-section__slider-wrapper">
                <div class="swiper-container team-section__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="team-inner.php" class="doctor-card">
                                <div class="doctor-card__thumb">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/admin/doctor.png" width="266" height="345"
                                         alt="Иванова Мария Ивановна">
                                </div>
                                <h3 class="doctor-card__name">
                                    Иванова Мария Ивановна
                                </h3>
                                <div class="doctor-card__desc">
                                    Стаж работы более 40 лет <br>
                                    Врач лимфолог
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="team-inner.php" class="doctor-card">
                                <div class="doctor-card__thumb">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/admin/doctor.png" width="266" height="345"
                                         alt="Иванова Мария Ивановна">
                                </div>
                                <h3 class="doctor-card__name">
                                    Иванова Мария Ивановна
                                </h3>
                                <div class="doctor-card__desc">
                                    Стаж работы более 40 лет <br>
                                    Врач лимфолог
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="team-inner.php" class="doctor-card">
                                <div class="doctor-card__thumb">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/admin/doctor.png" width="266" height="345"
                                         alt="Иванова Мария Ивановна">
                                </div>
                                <h3 class="doctor-card__name">
                                    Иванова Мария Ивановна
                                </h3>
                                <div class="doctor-card__desc">
                                    Стаж работы более 40 лет <br>
                                    Врач лимфолог
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="team-inner.php" class="doctor-card">
                                <div class="doctor-card__thumb">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/admin/doctor.png" width="266" height="345"
                                         alt="Иванова Мария Ивановна">
                                </div>
                                <h3 class="doctor-card__name">
                                    Иванова Мария Ивановна
                                </h3>
                                <div class="doctor-card__desc">
                                    Стаж работы более 40 лет <br>
                                    Врач лимфолог
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="slider-controls team-section__controls">
                    <button class="slider-control slider-control_prev">
                        <svg class="icon" width="40" height="40" viewBox="0 0 40 40">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-arrow-left"></use>
                        </svg>
                    </button>
                    <button class="slider-control slider-control_next">
                        <svg class="icon" width="40" height="40" viewBox="0 0 40 40">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-arrow-right"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <h2 class="dispaly display_size_big reviews__title">
                Отзывы наших пациентов
            </h2>

            <div class="row reviews__row">
                <ul class="reviews__list">
                    <li class="reviews__item">
                        <!-- Begin review-->
                        <article class="review">
                            <div class="review__part review__part_left">
                                <a href="/" class="logo review__logo">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Л" width="70" height="70" class="logo__img">
                                </a>
                                <div class="review__hero">
                                    <!-- В data-rating-count содержится количество звезд для рейтинга -->
                                    <div class="rating review__rating" data-rating-count="2"></div>
                                    <h3 class="dispaly display_size_middle review__name">
                                        Александр
                                    </h3>
                                    <div class="review__date">
                                        28.10.2019
                                    </div>
                                </div>
                            </div>
                            <div class="review__part review__part_right">
                                <div class="review__text">
                                    <p>
                                        Забыла дома обед на работу, меня просто спасла пицца клаб. Очень вкусная
                                        пицца, доставка всегда вовремя.
                                    </p>
                                </div>

                                <div class="review__gallery">
                                    <a href="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg" data-fancybox="gallary1" class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                    <a href="https://youtu.be/ioHHSinB_Bw" data-fancybox="gallary1"
                                       class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg" data-fancybox="gallary1" class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg" data-fancybox="gallary1" class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                </div>
                            </div>
                        </article>
                        <!-- End review-->
                    </li>
                    <li class="reviews__item">
                        <!-- Begin review-->
                        <article class="review">
                            <div class="review__part review__part_left">
                                <a href="/" class="logo review__logo">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Л" width="70" height="70" class="logo__img">
                                </a>
                                <div class="review__hero">
                                    <!-- В data-rating-count содержится количество звезд для рейтинга -->
                                    <div class="rating review__rating" data-rating-count="2"></div>
                                    <h3 class="dispaly display_size_middle review__name">
                                        Александр
                                    </h3>
                                    <div class="review__date">
                                        28.10.2019
                                    </div>
                                </div>
                            </div>
                            <div class="review__part review__part_right">
                                <div class="review__text">
                                    <p>
                                        Забыла дома обед на работу, меня просто спасла пицца клаб. Очень вкусная
                                        пицца, доставка всегда вовремя.
                                    </p>
                                </div>

                                <div class="review__gallery">
                                    <a href="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg" data-fancybox="gallary2" class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                    <a href="https://youtu.be/ioHHSinB_Bw" data-fancybox="gallary2"
                                       class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg" data-fancybox="gallary2" class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg" data-fancybox="gallary2" class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                </div>
                            </div>
                        </article>
                        <!-- End review-->
                    </li>
                    <li class="reviews__item">
                        <!-- Begin review-->
                        <article class="review">
                            <div class="review__part review__part_left">
                                <a href="/" class="logo review__logo">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Л" width="70" height="70" class="logo__img">
                                </a>
                                <div class="review__hero">
                                    <!-- В data-rating-count содержится количество звезд для рейтинга -->
                                    <div class="rating review__rating" data-rating-count="2"></div>
                                    <h3 class="dispaly display_size_middle review__name">
                                        Александр
                                    </h3>
                                    <div class="review__date">
                                        28.10.2019
                                    </div>
                                </div>
                            </div>
                            <div class="review__part review__part_right">
                                <div class="review__text">
                                    <p>
                                        Забыла дома обед на работу, меня просто спасла пицца клаб. Очень вкусная
                                        пицца, доставка всегда вовремя.
                                    </p>
                                </div>

                                <div class="review__gallery">
                                    <a href="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg" data-fancybox="gallary3" class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                    <a href="https://youtu.be/ioHHSinB_Bw" data-fancybox="gallary3"
                                       class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg" data-fancybox="gallary3" class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                    <a href="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg" data-fancybox="gallary3" class="review__gallery-slide">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/admin/rev.jpg">
                                    </a>
                                </div>
                            </div>
                        </article>
                        <!-- End review-->
                    </li>
                </ul>

                <div class="float-block">
                    <div class="leave-review">
                        <div class="leave-review__icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/svg/icon-rev.svg" width="39" height="44">
                        </div>
                        <h3 class="dispaly display_size_middle leave-review__title">
                            Оставьте ваш отзыв
                        </h3>
                        <p class="leave-review__text">
                            Нам важен каждый отзыв. <br>Ведь именно Вы делаете нас лучше.
                        </p>
                        <button class="btn-fill leave-review__btn-fill" data-options='{"touch" : false}'
                                data-fancybox data-src="#review-pop-up">
                            Оставить отзыв
                        </button>
                    </div>

                    <a href="/reviewes.html" class="show-more reviews__show-more">
                        посмотреть все отзывы
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="contacts-section contacts-section_bg_grey">
        <div class="container">
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

                    <button class="btn-fill contacts-section__btn-fill" data-options='{"touch" : false}'
                            data-fancybox data-src="#feedback">
                        Записаться на прием онлайн
                    </button>
                </div>
            </div>
        </div>
    </section>

</main>
<?php require_once ('parts/views/feedback.php')?>
<?php require_once ('parts/views/rewiewPopUp.php')?>
<?php get_footer(); ?>


