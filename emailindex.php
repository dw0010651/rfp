<?php
// Include and initialize phpmailer class
require 'phpmailer/PHPMailerAutoload.php';

define ('GUSER','wearerealfitpro@gmail.com');
define ('GPWD','realfit00');


// create an instance of PHPMailer
$mail = new PHPMailer();


$mail->isSMTP();
// set a host
$mail->Host = 'smtp.gmail.com';

//set autentication to true;
$mail->SMTPAuth = true;
//set login details for Gmail account
$mail->Username = GUSER;
//set password
$mail->Password = GPWD;
//set type of protection
$mail->SMTPSecure = 'tls'; //or able to use 'ssl'
//set a port
$mail->Port = 587; // 587(tls) 465(ssl)
// Email subject
$mail->Subject = 'using PHPMailer';
//set body
$mail->Body = "This is my body";
//set who us sending an email
$mail->setFrom('wearerealfitpro@gmail.com', 'Administrator');
// Add a recipient
//$mail->addAddress('dw001651@gmail.com','Jay');


// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has sent successfully!';
}
?>