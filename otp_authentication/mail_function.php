<?php
	function sendOTP($email,$otp) {
		require('phpmailer/class.phpmailer.php');
		require('phpmailer/class.smtp.php');

		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "465"; //SMTP Port
		$mail->Username = "info@rictech.co.in"; //SMTP username
		$mail->Password = "Killer@08"; //SMTP Password
		$mail->Host     = "cpanel.freehosting.com"; //SMTP HOST
		$mail->Mailer   = "smtp";
		$mail->SetFrom("info@rictech.co.in", "RICTech"); //FROM EMAIL, FROM NAME
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);
		$result = $mail->Send();

		return $result;
	}
?>