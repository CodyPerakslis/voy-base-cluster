<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
require_once 'class.phpmailer.php';
$mail = new PHPMailer;
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->From = $_POST['email'];
$mail->FromName ='Contacted By : '.$_POST['fname'];
$mail->addAddress("team@thevoyapp.com", "Voy");
//$mail->addAddress("dev5.veomit@gmail.com",'Voy');

$mail->addReplyTo($_POST['email'], "Reply");
$mail->isHTML(true);

$mail->Subject = "Contact Details";
$body="<b>Name : </b>".$_POST['fname'].'<br/><b>Email Address : </b>'.$_POST['email'].'<br/><b>Message : </b>'.$_POST['msg'];
$mail->MsgHTML($body);

if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
    echo "From: " . $mail;
}
else
{
    $_SESSION['sucess-email']='Thanks For Contacting Us, Someone From Our Team Will Be In Touch Shortly.';
    header("Location: https://thevoyapp.com");
}
 ?>
