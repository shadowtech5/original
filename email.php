<?php
require 'PHPMailerAutoload.php';
// include('class.smtp.php');
function email_send($to)
{
	$mail = new PHPMailer;
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 2;
	$mail->Host = 'sg2plcpnl0231.prod.sin2.secureserver.net';
	// $mail->Host = 'smtp.mail.yahoo.com';
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;
	$mail->Username = "info@bookmyanchors.com"; // GMAIL username
	$mail->Password = "b9895169812@"; // GMAIL password
	// $mail->Username = 'jishnunand@yahoo.com';
	// $mail->Password = 'target@newhome5';

	//Typical mail data
	$mail->addAddress($to);
	$mail->addCC("jishnunand@gmail.com");
	$mail->SetFrom("no-replay@bookmyanchors.com", "BookMyAnchors.com");
	$mail->Sender='no-replay@bookmyanchors.com';
	$mail->Subject = "Thanks for using BookMyAnchors";
	$mail->Body = "test email";

	try{
	    $mail->Send();
	    echo "Success!";
	} catch(Exception $e){
	    //Something went bad
	    echo "Fail :(". $e;
	}
}
email_send("siraj.espanioevents@gmail.com");
?>