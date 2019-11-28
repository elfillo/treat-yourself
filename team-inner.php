<?php
/*
Template Name: Доктор
Template Post Type: post_doctor
*/
?>
<?php get_header()?>
<main class="main-content">

    <section class="team-inner">
        <div class="container">

            <!-- Begin breadcrumb-->
            <ul class="breadcrumb team-inner__breadcrumb">
                <li class="breadcrumb__item">
                    <a href="/" class="breadcrumb__link">
                        Главная
                    </a>
                </li>
                <li class="breadcrumb__item">
                    <a href="#" class="breadcrumb__link">
                        Врачи
                    </a>
                </li>
                <li class="breadcrumb__item">
	                <?php echo $post->post_title?>
                </li>
            </ul>
            <!-- End breadcrumb-->

            <div class="row team-inner__row">
                <div class="doctor-info team-inner__doctor-info">
                    <h2 class="display display_size_big doctor-info__name">
                        <?php echo $post->post_title?>
                    </h2>
                    <div class="text doctor-info__position">
	                    <?php the_field('doctor_specialization', $post->ID)?>
                    </div>
                    <div class="doctor-info__desc">
	                    <?php the_field('doctor_skills', $post->ID)?>
                        <?php
                            $serts = get_field('doctor_certificates', $post->ID);
                        ?>
                        <?php if(!empty($serts)):?>
                        <h2 class="doctor-info__education-name doctor-info__education-name_sertificate">
                            Сертификаты 
                        </h2>
                        <div class="swiper-container doctor-info__sertifaicate-list">
                            <div class="swiper-wrapper">
                                <?php foreach (get_field('doctor_certificates', $post->ID) as $img):?>
                                <div class="swiper-slide">
                                    <a href="<?php echo wp_get_attachment_image_src($img, 'full')[0]?>" class="doctor-info__sertifaicate"
                                       data-fancybox="gallery">
                                        <img src="<?php echo wp_get_attachment_image_src($img, 'full')[0]?>" alt="">
                                    </a>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <?php endif;?>
                        <button class="btn-fill doctor-info__btn" data-options='{"touch" : false}'
                            data-fancybox data-src="#feedback">
                            Записаться на прием онлайн
                        </button>
                    </div>
                </div>
                <div class="doctor-avatar team-inner__doctor-avatar js-sticky-doctor-avatar">
	                <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full')[0]; ?>
                    <img src="<?php echo $src?>" alt="">
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer()?>