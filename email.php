<?php
require 'PHPMailerAutoload.php';
// include('class.smtp.php');

$mail = new PHPMailer;
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
// $mail->Host = 'smtp.mail.yahoo.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "bookmyanchors@gmail.com"; // GMAIL username
$mail->Password = "9895169812"; // GMAIL password
// $mail->Username = 'jishnunand@yahoo.com';
// $mail->Password = 'target@newhome5';

//Typical mail data
$mail->addAddress("siraj0007@gmail.com");
$mail->SetFrom("no-replay@bookmyanchors.com", "BookMyAnchors");
$mail->Sender='no-replay@bookmyanchors.com';
$mail->Subject = "My df";
$mail->Body = "Mail contents";

try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
    //Something went bad
    echo "Fail :(". $e;
}