<?php 


$mail = new PHPMailer(true);

try{

	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();

	$mail->Host = 'smtp1.example.com';
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port = 587;

	$mail->isHTML(false);
	$mail->Subject = 'Here is the subject';
	$mail->Body = 'And here is the body.';

	$mail->send();
	echo 'Message has been sent';

} catch(Exception $e){
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


 ?>