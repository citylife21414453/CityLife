<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$connection = new mysqli("localhost", "root", "", "citylife");

		$email = $_POST['signup-email'];
		


		require './vendor/autoload.php';
		$mail = new PHPMailer(true);
		try{
			$mail -> SMTPDebug = 0;
			$mail -> isSMTP();
			$mail -> Host = 'smtp.gmail.com';
			$mail -> SMTPAuth = true;
			$mail -> Username = 'clife2242@gmail.com';
			$mail -> Password = 'CityLife@123';
			$mail -> SMTPSecure = 'tls';
			$mail -> Port = 587;
			$mail -> setFrom ('clife2242@gmail.com', 'citylife');
			$mail -> addAddress ($email, $email);
			$mail -> isHTML(true);
			$mail -> Subject = 'Hi $email, Thank you for registering';
			$mail -> Body = "Hi $email, Thank you for registering. I hope you will have a pleasant experience through our service.";
			$mail -> AltBody = "Hi $email, Thank you for registering  ";
			$mail -> send();
			
		} catch(Exception $e) {
			echo 'Email could not be sent';
			echo 'Mailer Error: '.$mail->ErrorInfo;
		}
	
	

?>