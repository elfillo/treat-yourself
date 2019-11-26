<?php
/*	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../libs/PHPMailer/src/Exception.php';
	require '../libs/PHPMailer/src/PHPMailer.php';

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

		$message = '';
		$message .= 'Пользователь по имени '.$name.$newLine;
		$message .= 'Телефон: ' . $phone . $newLine;
		$message .= 'Специализция: ' . $spec . $newLine;
		$message .= 'Доктор: ' . $doctor . $newLine;
		$message .= 'Услуга: ' . $serviceType . $newLine;
		$message .= 'Дата: ' . $date . $newLine;
		$message .= 'Время:' . $time . $newLine;

		$mail = new PHPMailer(true);

		$mail->setFrom('filonenko0406@gmail.com', 'Your Name');
		$mail->addAddress('filonenko0406@gmail.com', 'My Friend');
		$mail->Subject  = 'Новая запись с сайта Лечись';
		$mail->Body     = $message;
		$mail->addAttachment($_FILES['photo_1']['tmp_name'], $_FILES['photo_1']['name']);
		$mail->addAttachment($_FILES['photo_2']['tmp_name'], $_FILES['photo_1']['name']);
		$mail->addAttachment($_FILES['photo_3']['tmp_name'], $_FILES['photo_1']['name']);
		$mail->addAttachment($_FILES['photo_4']['tmp_name'], $_FILES['photo_1']['name']);

		if(!$mail->send()) {
			echo 'Message was not sent.';
			echo 'Mailer error: ' . $mail->ErrorInfo;
		} else {
			echo 'Message has been sent.';
		}
	}

	add_action('wp_ajax_nopriv_service', 'getServiceForm' );
	add_action('wp_ajax_service', 'getServiceForm' );
*/?>