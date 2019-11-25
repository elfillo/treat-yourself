<?php
	function getServiceForm(){
		parse_str($_POST['data'], $data);

		$newLine = "\r\n";

		$name = $data['name'];
		$phone = $data['phone'];
		$spec = explode("|", $data['specializaciya']);
		$doctor = $data['specialist'];
		$serviceType = $data['serviceType'];
		$date = $data['date'];
		$time = $data['time'];

		$to      = 'filonenko0406@gmail.com';
		$subject = 'Новая запись с сайта';
		$message = '';
		$message .= 'Пользователь по имени '.$name.$newLine;
		$message .= 'Телефон: ' . $phone . $newLine;
		$message .= 'Специализция: ' . $spec . $newLine;
		$message .= 'Доктор: ' . $doctor . $newLine;
		$message .= 'Услуга: ' . $serviceType . $newLine;
		$message .= 'Дата: ' . $date . $newLine;
		$message .= 'Время:' . $time . $newLine;

		mail($to, $subject, $message);
	}

	add_action('wp_ajax_nopriv_service', 'getServiceForm' );
	add_action('wp_ajax_service', 'getServiceForm' );

	function testReview(){
		parse_str($_POST['data'], $data);

		print_r($_POST);
		print_r($_FILES);
	}

	add_action('wp_ajax_nopriv_ajax_review', 'testReview' );
	add_action('wp_ajax_ajax_review', 'testReview' );
?>