<?php
/*
Template Name: Услуга
*/
?>
<?php get_header(); ?>
<?php
    $symptoms = query_posts(array(
	    'post_type' => 'post_symptoms',
        'meta_key'  => 'specialization_id',
        'meta_value'=> $post->ID
    ));
    $doctors = query_posts(array(
	    'post_type' => 'post_doctor',
	    'meta_key'  => 'specialization_id',
	    'meta_value'=> $post->ID
    ));
    $price_list = query_posts(array(
        'post_type' => 'post_price',
        'meta_key'  => 'specialization_id',
        'meta_value'=> $post->ID
    ));
    $faq_list = query_posts(array(
        'post_type' => 'post_faq',
        'meta_key'  => 'specialization_id',
        'meta_value'=> $post->ID
    ));
    $reviews = query_posts(array(
        'post_type' => 'post_review',
        'meta_key'  => 'specialization_id',
        'meta_value'=> $post->ID
    ));
?>
<main class="main-content">

    <section class="service-inner">
        <button class="btn-fill service-inner__btn-fixed" data-options='{"touch" : false}'
                            data-fancybox data-src="#feedback">
            Записаться на прием
        </button>

        <div class="container">
            <!-- Begin breadcrumb-->
            <ul class="breadcrumb">
                <li class="breadcrumb__item">
                    <a href="/" class="breadcrumb__link">
                        Главная
                    </a>
                </li>
                <li class="breadcrumb__item">
	                <?php echo $post->post_title?>
                </li>
            </ul>
            <!-- End breadcrumb-->


            <div class="row service-inner__row">
                <div class="service-inner__body">
                    <div class="service-inner__preview">
                        <h1 class="display display_size_big service-inner__name">
                            <?php echo $post->post_title?>
                        </h1>
                        <div class="text">
                            <p><?php the_field('service_description', $post->ID)?></p>
                        </div>
                    </div>
	                <?php echo apply_filters('the_content', $post->post_content); ?>

                    <?php if(isset($doctors) && count($doctors) > 0):?>
                        <div class="doctors">
                        <div class="doctors__slider-wrapper">
                            <div class="swiper-container doctors-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($doctors as $doctor):?>
                                    <div class="swiper-slide doctors-slider__slide">
                                        <a href="<?php echo get_the_permalink($doctor->ID)?>" class="doctor-card">
                                            <div class="doctor-card__thumb">
	                                            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $doctor->ID ), array(266, 345))[0]; ?>
                                                <img src="<?php echo $src?>" width="266" height="345" alt="<?php echo $doctor->post_title?>">
                                            </div>
                                            <h3 class="doctor-card__name">
                                                <?php echo $doctor->post_title?>
                                            </h3>
                                            <div class="doctor-card__desc">
                                                <?php the_field('doctor_work_experience', $doctor->ID)?> <br>
	                                            <?php the_field('doctor_specialization', $doctor->ID)?>
                                            </div>
                                        </a>
                                    </div>
                                    <?php endforeach;?>
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

                        <div class="doctors__text">
                            <h2 class="service-inner__title">
                                Врачи, которые <br>будут вас лечить
                            </h2>
                            <div class="text">
                                <p>
                                    Попасть в нашу команду могут только <br>лучшие специалисты с многолетней
                                    <br>практикой и доказанным опытом.
                                </p>
                                <br>
                                <p>
                                    Наши врачи не только лечат. <br>Они помогают сохранить здоровье <br>и
                                    находят подход и ко всем пациентам.
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>

                    <?php if(isset($price_list) && count($price_list) > 0):?>
                        <div class="our-prices">
                        <h2 class="service-inner__title">
                            Стоимость услуг
                        </h2>
                        <ul class="preces">
                            <?php foreach ($price_list as $price_item):?>
                            <li class="price">
                                <h3 class="price__name">
                                    <?php echo $price_item->post_title?>
                                </h3>
                                <div class="price__value">
                                    <?php echo $price_item->post_excerpt?> &#8381;
                                </div>
                                <button class="price__btn" data-fancybox data-src="#feedback" onclick="activeService(<?php echo $price_item->ID?>)">
                                    Запись онлайн
                                </button>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <?php endif;?>

                    <?php if(strlen(get_post_meta($post->ID, 'service_preparation', true)) > 0):?>
                    <div class="service-inner__desc">
                        <h2 class="service-inner__title">
                            Как подготовится к приему
                        </h2>
                        <div class="text">
                            <p><?php the_field('service_preparation', $post->ID)?></p>
                        </div>
                    </div>
                    <?php endif;?>

                    <?php if(isset($reviews) && count($reviews) > 0):?>
                        <div class="service-reviews">
                        <h2 class="service-inner__title">
                            Отзывы наших пациентов
                        </h2>
                        <ul class="reviews__list">
                            <li class="reviews__item">
                                <!-- Begin review-->
                                <?php foreach ($reviews as $key => $review):?>
                                    <?php $galleryKey = 'gallary'.$key?>
                                <article class="review">
                                    <div class="review__part review__part_left">
                                        <a href="/" class="logo review__logo">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Л" width="70" height="70" class="logo__img">
                                        </a>
                                        <div class="review__hero">
                                            <!-- В data-rating-count содержится количество звезд для рейтинга -->
                                            <div class="rating review__rating" data-rating-count="<?php the_field('review_rating', $review->ID)?>"></div>
                                            <h3 class="dispaly display_size_middle review__name">
	                                            <?php the_field('review_author', $review->ID)?>
                                            </h3>
                                            <div class="review__date">
	                                            <?php the_field('review_date', $review->ID)?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review__part review__part_right">
                                        <div class="review__text">
                                            <p><?php the_field('review_text', $review->ID)?></p>
                                        </div>
		                                <?php if(!empty(get_field('review_photo', $review->ID))):?>
                                        <div class="review__gallery">
	                                        <?php foreach (get_field('review_photo', $review->ID) as $img):?>
		                                        <?php
		                                        $attachment = get_post( $img );
		                                        $href = strlen($attachment->post_excerpt) > 0 ? $attachment->post_excerpt  : wp_get_attachment_image_src($img, 'full')[0];
		                                        ?>
                                                <a href="<?php echo $href?>" data-fancybox="<?php echo $galleryKey?>" class="review__gallery-slide">
                                                    <img src="<?php echo wp_get_attachment_image_src($img, 'full')[0]?>">
                                                </a>
	                                        <?php endforeach;?>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                </article>
                                <?php endforeach;?>
                                <!-- End review-->
                            </li>
                        </ul>
                    </div>
                    <?php endif;?>

                    <?php if(isset($faq_list) && count($faq_list) > 0):?>
                        <div class="faq">
                        <h2 class="service-inner__title">
                            Частые вопросы наших пациентов
                        </h2>
                        <div class="accardeon">
                            <?php foreach ($faq_list as $faq):?>
                            <div class="accardeon__item">
                                <button class="accardeon__head">
                                    <?php echo $faq->post_title?>
                                </button>
                                <div class="accardeon__body">
                                    <div class="accardeon__inner-body">
	                                    <?php echo $faq->post_content?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <?php endif;?>
                    <!-- Begin contact-us -->
                    <div class="contact-us">
                        <img src="<?php echo get_template_directory_uri() ?>/img/svg/mess.svg" class="contact-us__mess">
                        <div class="contact-us__text">
                            <strong class="contact-us__label">Не нашли ответа на свой вопрос?</strong>
                            <p>
                                Свяжитесь с нами, и мы предоставим <br>необходимую информацию
                            </p>
                        </div>
                        <div class="contact-us__socials">
                            <div class="contact-us__socials-wrapper">
                                <a href="#" class="contact-us__soc">
                                    <svg class="icon" width="40" height="40" viewBox="0 0 40 40">
                                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-whats-app"></use>
                                    </svg>
                                </a>
                                <a href="#" class="contact-us__soc">
                                    <svg class="icon" width="40" height="40" viewBox="0 0 40 40">
                                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-viber"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="contact-us__message">
                                <span>Отвечаем <br>в течение <br>5 минут</span>
                            </div>
                        </div>
                    </div>
                    <!-- End contact-us -->
                </div>

                <!-- Begin float-block -->
                <div class="float-block float-block_sticky">
                    <div class="service-feedback">
                        <svg class="icon service-feedback__icon" width="70" height="70" viewBox="0 0 70 70">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-stethoscope"></use>
                        </svg>
                        <h2 class="service-inner__title service-feedback__title">
                            Запишитесь <br>на прием
                        </h2>
                        <div class="text service-feedback__text">
                            <p>
                                Администатор клиники с радостью ответит на ваши вопросы и запишит к нужному
                                специалисту
                            </p>
                        </div>
                        <button class="btn-fill service-feedback__btn" data-fancybox data-src="#feedback"
                            data-touch="false">
                            Записаться на прием
                        </button>
                    </div>
                </div>
                <!-- End float-block -->
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
                    <a href="tel:<?php the_field('contacts_phone_link', 21)?>" class="contact-phone contacts-section__contact-phone">
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-phone"></use>
                        </svg>
                        <?php the_field('contacts_phone', 21)?>
                    </a>

                    <div class="address contacts-section__address">
                        <svg class="icon" width="15" height="20" viewBox="0 0 17 22">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-pin"></use>
                        </svg>
	                    <?php the_field('contacts_address', 21)?>
                    </div>

                    <div class="time contacts-section__time">
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-time"></use>
                        </svg>
                        Режим работы -
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

                    <div class="socials contacts-section__socials">
                        <a href="<?php the_field('contacts_vk', 21)?>" class="socials__item socials__item_vk">
                            <svg class="icon" viewBox="0 0 80 80">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-vk"></use>
                            </svg>
                        </a>

                        <a href="<?php the_field('contacts_inst', 21)?>" class="socials__item socials__item_inst">
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
<?php get_footer()?>