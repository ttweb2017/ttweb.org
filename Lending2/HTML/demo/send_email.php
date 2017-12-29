<?php

require_once("vendor/autoload.php");
$params = require("config/params.php");

if(isset($_POST["email"])){
	
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	 
	//Enable SMTP debugging.
	 
	$mail->SMTPDebug = 3;                           
	 
	//Set PHPMailer to use SMTP.
	 
	$mail->isSMTP();        
	 
	//Set SMTP host name                      
	 
	$mail->Host = $params['host'];
	 
	//Set this to true if SMTP host requires authentication to send email
	 
	$mail->SMTPAuth = true;                      
	 
	//Provide username and password
	 
	$mail->Username = $params['username'];           
	 
	$mail->Password = $params['password'];                    
	 
	//If SMTP requires TLS encryption then set it
	 
	$mail->SMTPSecure = "ssl";                       
	 
	//Set TCP port to connect to
	 
	$mail->Port = $params['port'];                  
	 
	$mail->From = $_POST["email"];
	
	$mail->FromName = $_POST["email"];
	
	$mail->FromName = 'TTWeb Contact';
	
	$mail->addAddress($params['adminEmail'], 'TTWeb');
	 
	$mail->isHTML(true);
	
	$body = '';
	
	//here we check some variables if they are set.
	if(isset($_POST["subject"])){
		$mail->Subject = 'Question';
		$body .= '<center><b>Заголовок: ' .$_POST["subject"]. '</b><center><br />';
	}else{
		$mail->Subject = "Subscribe";
	}
	
	if(isset($_POST["name"])){
		$body .= '<i>Имя: ' .$_POST["name"]. '</i><br />';
	}
	
	$body .= '<i>Почта: '. $_POST["email"]. '</i>';
	
	if(isset($_POST["phone"])){
		$body .= '<br /><i>Телефон: '. $_POST["phone"]. '</i>';
	}
	
	if(isset($_POST["question"])){
		$body .= '<br /><i>Вопрос: '. $_POST["question"]. '</i>';
	}
	
	$mail->Body = $body;
	
	$mail->AltBody = 'This is the plain text version of the email content';
	 
	
	if(!$mail->send())
	 
	{
	 
	echo "Mailer Error: " . $mail->ErrorInfo;
	 
	}
	 
	else
	 
	{
	 
	//echo "Message has been sent successfully";
	echo("<script>location.href = 'index.php';</script>");
	 
	}

}