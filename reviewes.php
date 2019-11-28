<?php
/*
Template Name: Отзывы
*/
?>
<?php get_header(); ?>
<!-- Begin content-->
<main class="main-content">
    <section class="reviews reviews_page">
        <div class="container">

            <!-- Begin breadcrumb-->
            <ul class="breadcrumb">
                <li class="breadcrumb__item">
                    <a href="/" class="breadcrumb__link">
                        Главная
                    </a>
                </li>
                <li class="breadcrumb__item">
                    Отзывы
                </li>
            </ul>
            <!-- End breadcrumb-->

            <h2 class="dispaly display_size_big reviews__title">
                Отзывы наших пациентов
            </h2>

            <div class="row reviews__row">
                <ul class="reviews__list">
	                <?php
	                $reviews = query_posts(array(
		                'post_type' => 'post_review'
	                ));
	                ?>
	                <?php foreach ($reviews as $key => $review):?>
                    <?php $galleryKey = 'gallary'.$key?>
                    <li class="reviews__item">
                        <!-- Begin review-->
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
                                    <p>
	                                    <?php the_field('review_text', $review->ID)?>
                                    </p>
                                </div>

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
                            </div>
                        </article>
                        <!-- End review-->
                    </li>
	                <?php endforeach;?>
                </ul>

                <div class="float-block float-block_sticky js-sticky-block">
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
                </div>


            </div>
    </section>
</main>
<?php get_footer()?>
