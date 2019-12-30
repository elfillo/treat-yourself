<?php
function getHeaderForm(){
	if(isset($_POST['data'])){
		$spec_list = get_pages(array(
			'meta_key' => '_wp_page_template',
			'meta_value' => 'service-inner.php'
		));
	}
	foreach ($spec_list as $spec){
		$sp = $spec->post_title.'|'. $spec->ID;
		echo '<option value="'.$sp.'">';
		echo $spec->post_title;
		echo '</option>';
	}
	return;
}
add_action('wp_ajax_nopriv_get_header_form', 'getHeaderForm' );
add_action('wp_ajax_get_header_form', 'getHeaderForm' );

function getDoctors(){
	print_r($_POST['data']);
	$doctors = [];
	if(isset($_POST['data'])){
		$doctors = query_posts(array(
			'post_type' => 'post_doctor',
			'meta_key'  => 'specialization_id',
			'meta_value'=> $_POST['data']
		));
	}
	foreach ($doctors as $doctor){
		echo '<option value="'.$doctor->post_title.'">';
		echo $doctor->post_title;
		echo '</option>';
	}
	return;
}

add_action('wp_ajax_nopriv_get_sub_select', 'getDoctors' );
add_action('wp_ajax_get_sub_select', 'getDoctors' );

function getServices(){
	$services = [];
	if(isset($_POST['data'])){
		$services = query_posts(array(
			'post_type' => 'post_price',
			'meta_key'  => 'specialization_id',
			'meta_value'=> $_POST['data']
		));
	}
	foreach ($services as $service){
		echo '<option value="'.$service->post_title.'">';
		echo $service->post_title;
		echo '</option>';
	}
	return;
}

add_action('wp_ajax_nopriv_get_service_list', 'getServices' );
add_action('wp_ajax_get_service_list', 'getServices' );

function setActiveService(){
	$d = get_post($_POST['data']);

	echo '<option value="'.$d->post_title.'">';
	echo $d->post_title;
	echo '</option>';

}
add_action('wp_ajax_nopriv_set_active_service', 'setActiveService' );
add_action('wp_ajax_set_active_service', 'setActiveService' );
?>