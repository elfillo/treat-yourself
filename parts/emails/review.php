<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../libs/PHPMailer/src/Exception.php';
require '../libs/PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer(true);

$message = "Имя пользователя: ".$_POST['userName'];
$message .= "\nТелефон пользователя  ".$_POST['userPhone'];
$message .= "\nТекст отзыва ".$_POST['userMessage'];
$message .= "\nРейтинг: ".$_POST['rating'];

$mail->setFrom('filonenko0406@gmail.com', 'Your Name');
$mail->addAddress('filonenko0406@gmail.com', 'My Friend');
$mail->Subject  = 'Отзык с сайта Лечись';
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
?>
