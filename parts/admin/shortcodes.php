<?php
function true_url_external( $atts, $shortcode_content = null ) {
	$params = shortcode_atts( array(
		'anchor' => 'Миша Рудрастых'
	), $atts );
	return "<a href='" . do_shortcode($shortcode_content) . "' target='_blank'>{$params['anchor']}</a>";
}
add_shortcode( 'trueurl', 'true_url_external' );

function getTextBlock($atts, $shortcode_content = null) {
	$params = shortcode_atts( array(
		'title' => 'Заголовок'
	), $atts );

	$html = '';

	$html .= "<div class='service-inner__desc'>";
	$html .= "<h2 class='service-inner__title'>{$params['title']}</h2>";
	$html .= "<div class='text'><p>";
	$html .= do_shortcode($shortcode_content);
	$html .= "</div></p>";
	$html .= "</div>";

	return $html;
}

add_shortcode( 'text_block', 'getTextBlock' );

function getList($atts, $shortcode_content = null) {
	$params = shortcode_atts( array(
		'title' => 'Заголовок'
	), $atts );

	$items = do_shortcode($shortcode_content);

	$listContent = explode('/', $items);
	$list = '';
	foreach ($listContent as $item){
		$list .= "<li class='symptoms__item'>".$item."</li>";
	}

	$html = "<ol class='symptoms'>".$list."</ol>";

	return $html;
}

add_shortcode( 'list', 'getList' );

function getSlider($atts, $shortcode_content = null) {
	$params = shortcode_atts( array(
		'id' => null
	), $atts );

	$slides = '';

	foreach (get_field('service_slider', (int)$params['id']) as $img){
		$src = wp_get_attachment_image_src($img, 'full')[0];
		$slides .= "<div class='swiper-slide service-slider__slide' style='background-image: url($src);'></div>";
	}

	$html = "<div class='swiper-container service-slider'>";
	$html .= "<div class='swiper-wrapper'>".$slides."</div>";
	$html .= "<div class='slider-controls service-slider__controls'>
                            <button class='slider-control slider-control_prev'>
                                <svg class='icon' width='40' height='40' viewBox='0 0 40 40'>
                                    <use xlink:href='/wp-content/themes/treat-yourself/img/symbol_sprite.svg#icon-arrow-left'></use>
                                </svg>
                            </button>
                            <button class='slider-control slider-control_next'>
                                <svg class='icon' width='40' height='40' viewBox='0 0 40 40'>
                                    <use xlink:href='/wp-content/themes/treat-yourself/img/symbol_sprite.svg#icon-arrow-right'></use>
                                </svg>
                            </button>
                        </div>";
	$html .= "</div>";

	return $html;
}

add_shortcode( 'slider', 'getSlider' );

?>