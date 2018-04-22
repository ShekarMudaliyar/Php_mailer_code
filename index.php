<?php
	require 'phpmailer/PHPMailerAutoload.php';
	try{
	$mail = new PHPMailer();
	$mail->Host = "smtp.gmail.com"; //using google's smtp
	$mail->isSMTP();
	$mail->SMTPAuth=true;
	$mail->Username = "example@gmail.com"; //your email address | senders email
	$mail->Password = "secret";	
	$mail->SMTPSecure = "ssl";
	$mail->Port= 465;
	$mail->Subject = "Test email"; //email subject
	$mail->Body="this is the body"; //email body
	$mail->setFrom('example@gmail.com',"shekar"); //senders email address
	$mail->addAddress('anotherexample@gmail.com');	//recipients email address
	if($mail->send())
		echo "mail is sent";
	else
		echo "mail not sent";
}
catch(Exception $e){
	echo "Exception is thrown !!!! Something gone wrong";
}
?>