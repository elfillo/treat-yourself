<?php
print_r($_POST);
print_r($_FILES);

if (isset ($_POST['userName'])) {
	$to = "filonenko0406@gmail.com";
	$from = "support@tpverstak.ru";
	$subject = "Заполнена контактная форма на сайте ".$_SERVER['HTTP_REFERER'];
	$message = "Имя пользователя: ".$_POST['userName'];
	$message .= "\nТелефон пользователя  ".$_POST['userPhone'];
	$message .= "\nТекст отзыва ".$_POST['userMessage'];
	$message .= "\nАдрес сайта: ".$_SERVER['HTTP_REFERER'];

	$boundary = md5(date('r', time()));
	$filesize = '';
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "From: " . $from . "\r\n";
	$headers .= "Reply-To: " . $from . "\r\n";
	$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
	$message="
Content-Type: multipart/mixed; boundary=\"$boundary\"
  
--$boundary
Content-Type: text/plain; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit
  
$message";
	if(is_uploaded_file($_FILES['photo_1']['tmp_name'])) {
		$attachment = chunk_split(base64_encode(file_get_contents($_FILES['photo_1']['tmp_name'])));
		$filename = $_FILES['photo_1']['name'];
		$filetype = $_FILES['photo_1']['type'];
		$filesize = $_FILES['photo_1']['size'];
		$message.="
  
			--$boundary
			Content-Type: \"$filetype\"; name=\"$filename\"
			Content-Transfer-Encoding: base64
			Content-Disposition: attachment; filename=\"$filename\"
			  
			$attachment";
	}
	if(is_uploaded_file($_FILES['photo_2']['tmp_name'])) {
		$attachment = chunk_split(base64_encode(file_get_contents($_FILES['photo_2']['tmp_name'])));
		$filename = $_FILES['photo_2']['name'];
		$filetype = $_FILES['photo_2']['type'];
		$filesize = $_FILES['photo_2']['size'];
		$message.="
  
			--$boundary
			Content-Type: \"$filetype\"; name=\"$filename\"
			Content-Transfer-Encoding: base64
			Content-Disposition: attachment; filename=\"$filename\"
			  
			$attachment";
	}
	if(is_uploaded_file($_FILES['photo_3']['tmp_name'])) {
		$attachment = chunk_split(base64_encode(file_get_contents($_FILES['photo_3']['tmp_name'])));
		$filename = $_FILES['photo_3']['name'];
		$filetype = $_FILES['photo_3']['type'];
		$filesize = $_FILES['photo_3']['size'];
		$message.="
  
			--$boundary
			Content-Type: \"$filetype\"; name=\"$filename\"
			Content-Transfer-Encoding: base64
			Content-Disposition: attachment; filename=\"$filename\"
			  
			$attachment";
	}
	if(is_uploaded_file($_FILES['photo_4']['tmp_name'])) {
		$attachment = chunk_split(base64_encode(file_get_contents($_FILES['photo_4']['tmp_name'])));
		$filename = $_FILES['photo_4']['name'];
		$filetype = $_FILES['photo_4']['type'];
		$filesize = $_FILES['photo_4']['size'];
		$message.="
  
			--$boundary
			Content-Type: \"$filetype\"; name=\"$filename\"
			Content-Transfer-Encoding: base64
			Content-Disposition: attachment; filename=\"$filename\"
			  
			$attachment";
	}
	$message.="
	--$boundary--";

	if ($filesize < 10000000) { // проверка на общий размер всех файлов. Многие почтовые сервисы не принимают вложения больше 10 МБ
		mail($to, $subject, $message, $headers);
		echo $_POST['nameFF'].', Ваше сообщение отправлено, спасибо!';
	} else {
		echo 'Извините, письмо не отправлено. Размер всех файлов превышает 10 МБ.';
	}
}
?>
