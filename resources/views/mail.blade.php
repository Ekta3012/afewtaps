<?php

		require './vendor/autoload.php';
		require 'PHPMailerAutoload.php';

		$mail = new PHPMailer;

		//Enable SMTP debugging. 
		$mail->SMTPDebug = 2;                               
		//Set PHPMailer to use SMTP.
		$mail->isSMTP();            
		//Set SMTP host name                          
		$mail->Host = "smtp.gmail.com";
		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;                          
		//Provide username and password     
		$mail->Username = "ekta30121995@gmail.com";                 
		$mail->Password = "et263018";                           
		//If SMTP requires TLS encryption then set it
		$mail->SMTPSecure = "tls";                           
		//Set TCP port to connect to 
		$mail->Port = 587;                                   

		//$mail->From = $request->input('email_id');
		//$mail->FromName = $request->input('name');
		$mail->From = 'ekta@outlook.com';
		$mail->FromName = 'dilpreet';

		$mail->addAddress("ekta30121995@gmail.com", "Ekta Tiwari");

		$mail->isHTML(true);

		$mail->Subject = "Feedback@afewtaps";
		$mail->Body = 'mail test';
		//$mail->AltBody = "This is the plain text version of the email content";

		if(!$mail->send()) 
		{
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else 
		{
		    echo "Message has been sent successfully";
		}

?>