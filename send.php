<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$ques = $_POST['ques'];
	$ref = $_POST['ref'];
	$utm = $_POST['utm'];

	$color = $_POST['coloract'];
	$roof = $_POST['roofact'];
	$wheel = $_POST['wheelact'];
	$config = $_POST['configact'];

	$formname = $_POST['formname'];
	$maillist = array('mokselleweb@yandex.ru');
	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
	$headers .= "From: site\r\n";
	$td1_style = "border: 1px solid #000; max-width: 140px; padding: 5px 10px; font-weight: bold; background-color: #e8e8e8;";
	$td2_style = "border: 1px solid #000; max-width: 460px; min-width: 300px; padding: 5px 10px;";
	$msg_top = "
		<html>
			<body>
				<table style=\"border-collapse: collapse;\">
					<tr>
						<td style=\"$td1_style\">Имя</td>
						<td style=\"$td2_style\">$name</td>
					</tr>
					<tr>
						<td style=\"$td1_style\">Номер телефона</td>
						<td style=\"$td2_style\">$phone</td>
					</tr>";
	$msg_bot = "
					<tr>
						<td style=\"$td1_style vertical-align: top;\">Реферер</td>
						<td style=\"$td2_style\">$ref</td>
					</tr>
					<tr>
						<td style=\"$td1_style vertical-align: top;\">utm-метки</td>
						<td style=\"$td2_style\">$utm</td>
					</tr>
				</table>
			</body>
		</html>";
	$msg_mail = "
					<tr>
						<td style=\"$td1_style\">Электронный адрес</td>
						<td style=\"$td2_style\">$email</td>
					</tr>";
	$msg_ques = "
					<tr>
						<td style=\"$td1_style vertical-align: top;\">Вопрос</td>
						<td style=\"$td2_style\">$ques</td>
					</tr>";
	if ($color == '0') {	
		$msg_conf = '';
	}
	else {		
		$msg_conf = "
						<tr>
							<td style=\"$td1_style vertical-align: top;\">Цвет</td>
							<td style=\"$td2_style\">$color</td>
						</tr>
						<tr>
							<td style=\"$td1_style vertical-align: top;\">Крыша</td>
							<td style=\"$td2_style\">$roof</td>
						</tr>
						<tr>
							<td style=\"$td1_style vertical-align: top;\">Колёса</td>
							<td style=\"$td2_style\">$wheel</td>
						</tr>
						<tr>
							<td style=\"$td1_style vertical-align: top;\">Конфигурация</td>
							<td style=\"$td2_style\">$config</td>
						</tr>";
	}


	if(!empty($_POST['callback'])) {
		$subject = "site | Заказ звонка";
		$message = $msg_top.$msg_bot;
	}
	if(!empty($_POST['request'])) {
		$subject = "site | Заявка $formname";
			$message = $msg_top.$msg_mail.$msg_conf.$msg_bot;
	}
	if(!empty($_POST['question'])) {
		$subject = "site | Вопрос менеджеру";
		$message = $msg_top.$msg_mail.$msg_ques.$msg_bot;
	}
	if(!empty($_POST['callback']) || !empty($_POST['request']) || !empty($_POST['question'])) {
		foreach ($maillist as $mail) {
			mail($mail, $subject, $message, $headers) or print "Не могу отправить письмо !!!";
		}
	}
	unset($name,$email,$phone,$ques,$ref);
?>