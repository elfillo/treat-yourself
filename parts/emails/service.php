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

		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: От кого письмо <from@example.com>\r\n";
		$headers .= "Reply-To: kopelev.i@yandex.ru\r\n";

		$to      = 'kopelev.i@yandex.ru';
		$subject = 'Новая запись с сайта';
		$message = '';
		$message .= 'Пользователь по имени '.$name.$newLine;
		$message .= 'Телефон: ' . $phone . $newLine;
		$message .= 'Специализция: ' . $spec . $newLine;
		$message .= 'Доктор: ' . $doctor . $newLine;
		$message .= 'Услуга: ' . $serviceType . $newLine;
		$message .= 'Дата: ' . $date . $newLine;
		$message .= 'Время:' . $time . $newLine;

		mail($to, $subject, $message, $headers);
	}

	add_action('wp_ajax_nopriv_service', 'getServiceForm' );
	add_action('wp_ajax_service', 'getServiceForm' );
?>