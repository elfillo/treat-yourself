<?php
if(isset($post) && $post->post_type == 'post_doctor'){

	$specializations[] = get_post(get_post_meta($post->ID, 'specialization_id', true));

	$doctors = query_posts(array(
		'post_type' => 'post_doctor',
		'meta_key'  => 'specialization_id',
		'meta_value'=> $specializations[0]->ID
	));

	$services = query_posts(array(
		'post_type' => 'post_price',
		'meta_key'  => 'specialization_id',
		'meta_value'=> $specializations[0]->ID
	));

}else{
	global $template;
	$spec_list = get_pages(array(
		'meta_key' => '_wp_page_template',
		'meta_value' => 'service-inner.php'
	));

	$specializations = [];
	if(isset($post) && $post->post_type == 'page' && basename( $template ) === 'service-inner.php'){

		foreach ($spec_list as $spec){
			if($spec->ID == $post->ID){
				$specializations[0] =  $spec;
			}
		}
	}else{
		$specializations = $spec_list;
	}

	$doctors = query_posts(array(
		'post_type' => 'post_doctor',
		'meta_key'  => 'specialization_id',
		'meta_value'=> $specializations[0]->ID
	));

	$services = query_posts(array(
		'post_type' => 'post_price',
		'meta_key'  => 'specialization_id',
		'meta_value'=> $specializations[0]->ID
	));
}
?>
<div class="review-pop-up" id="feedback">
    <!-- <div class="overlay show"></div> -->
    <div class="review-pop-up__inner">
        <div class="review-pop-up__left">
            <form action="service" method="POST" class="form js-validate-form">
                <h3 class="dispaly display_size_big review-pop-up__title">
                    Запись на прием
                </h3>
                <p class="review-pop-up__subtitle">
                    Администратор клиники с радостью ответит <br>на ваши вопросы и запишет к нужному специалисту.
                </p>
                <div class="row review-pop-up__row">
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="userName" class="form__label"> Ваше имя:*</label>
                            <input type="text" class="input review-pop-up__input" id="userName" data-required
                                placeholder="Введите Ваше имя" name="name">
                        </div>
                    </div>
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="userPhone" class="form__label">Ваш телефон:*</label>
                            <input type="tel" class="input review-pop-up__input phone-mask" id="userPhone" data-required
                                data-phone placeholder="8-910-555-55-55" name="phone">
                        </div>
                    </div>
                </div>
                <div class="row review-pop-up__row">
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="specializaciya" class="form__label">Выбрать специализацию:</label>
                            <div class="select-wrapper">
                                <select name="specializaciya" class="input review-pop-up__input" id="specializaciya" onchange="getDoctors(value)">
                                    <?php foreach ($specializations as $specialization):?>
                                        <option value="<?php echo ($specialization->post_title .'|'. $specialization->ID)?>"><?php echo $specialization->post_title?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="specialist" class="form__label">Специалист:</label>
                            <div class="select-wrapper">
                                <select name="specialist" class="input review-pop-up__input" id="specialist">
	                                <?php foreach ($doctors as $doctor):?>
                                        <option value="<?php echo $doctor->post_title?>"><?php echo $doctor->post_title?></option>
	                                <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row review-pop-up__row">
                    <div class="form__group form__group_mb">
                        <label for="serviceType" class="form__label">Выбрать услугу:</label>
                        <div class="select-wrapper">
                            <select name="serviceType" class="input review-pop-up__input" id="serviceType">
	                            <?php foreach ($services as $service):?>
                                    <option value="<?php echo $service->post_title?>"><?php echo $service->post_title?></option>
	                            <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row review-pop-up__row">
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="date" class="form__label">Выбрать удобную дату:</label>
                            <input type="date" class="input review-pop-up__input" id="date"
                                placeholder="Например 18.12.2019" name="date">
                        </div>
                    </div>
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="time" class="form__label">Введите удобное время</label>
                            <input type="time" class="input review-pop-up__input phone-mask" id="time"
                                placeholder="Например 14:00" name="time">
                        </div>
                    </div>
                </div>
                <div class="row row_align-center review-pop-up__action">
                    <input
                            type="submit"
                            class="btn-fill review-pop-up__btn-fill js-submit"
                            value="Записаться на прием"
                            data-submit
                    >
                    <p class="form__policy">
                        Нажимая "Оформить заказ", Вы даёте Согласие <br>на обработку Ваших персональных данных
                        <br>и
                        принимаете <a href="#">Пользовательское соглашение</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="review-pop-up__right"
            style="background-image: url(<?php echo get_template_directory_uri() ?>/img/static/modal-bg.png);background-position-y: bottom;">
            <div class="badge review-pop-up__badge">
                <div class="badge__name">
                    Алена
                </div>
                <div class="badge__position">
                    администратор
                </div>
            </div>
        </div>
        <button class="close review-pop-up__close" id="close_feedback">
            <svg class="icon" width="42" height="42" viewBox="0 0 42 42">
                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/symbol_sprite.svg#icon-close"></use>
            </svg>
        </button>
    </div>
</div>