<?php
require 'class.phpmailer.php';
//require 'class.smtp.php';
$mail = new PHPMailer();
try {
    //$mail->SMTPDebug = 2;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
//auth information
    $mail->Username = "ibrahim.shaban.1996@gmail.com";
    $mail->Password = "Amdukjvdk#**2233";

    $mail->IsHTML(true);
    $mail->SingleTo = true;

//Sender Info
    $mail->From = "ibrahim.shaban.1996@gmail.com";
    $mail->FromName = "User Authentication";
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

