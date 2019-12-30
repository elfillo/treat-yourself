<?php
/*
Template Name: Команда
*/
?>
<?php get_header(); ?>

<main class="main-content">
    <section class="team-section team-section_page">
        <div class="container">

            <!-- Begin breadcrumb -->
            <ul class="breadcrumb">
                <li class="breadcrumb__item">
                    <a class="breadcrumb__link" href="/">
                        Главная
                    </a>
                </li>
                <li class="breadcrumb__item">
                    Врачи
                </li>
            </ul>
            <!-- End breadcrumb -->


            <h2 class="display display_size_big team-section__title">
                Лучшие врачи Рязани
            </h2>
            <p class="text team-section__text">
                Попасть в нашу команду могут только лучшие специалисты с многолетней практикой и доказанным
                опытом. <br>Наши врачи не только лечат. Они помогают сохранить здоровье и находят подход и ко
                всем пациентам.
            </p>

            <ul class="row team-section__body">
                <?php
                $team = query_posts(array(
                        'post_type' => 'post_doctor',
                        'meta_query' => array(
                            array(
                                'key' => '_thumbnail_id',
                                'compare' => 'EXISTS'
                            )
                        )
                ));
                ?>
                <?php foreach ($team as $doctor):?>
                <li class="team-section__item">
                    <a href="<?php echo get_post_permalink($doctor->ID)?>" class="doctor-card">
                        <div class="doctor-card__thumb">
	                        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $doctor->ID ), array(266, 345))[0]; ?>
                            <img src="<?php echo $src?>" width="266" height="345" alt="<?php echo $doctor->post_title?>">
                        </div>
                        <h3 class="doctor-card__name">
                            <?php echo $doctor->post_title?>
                        </h3>
                        <div class="doctor-card__desc">
	                        <?php the_field('doctor_work_experience', $doctor->ID)?>
                            <br>
	                        <?php the_field('doctor_specialization', $doctor->ID)?>
                        </div>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>

        </div>
    </section>
</main>
<?php get_footer()?>