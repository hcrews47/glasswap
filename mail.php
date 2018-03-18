<?php
require 'vendor\phpmailer\phpmailer\class.phpmailer.php';
$mail = new PHPMailer;

$Name    = $_POST['name'];
$Email   = $_POST['email'];
$Message = $_POST['body'];


$mail->setFrom($Email, $Name);
$mail->addAddress('glasswap@gmail.com', 'glasswap');
$mail->Subject  = "Customer Contact from $Email";
$mail->Body     = $Message;
if(!$mail->send()) {
  echo 'Message was not sent. ';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  $sent = "Your message has been sent! We will get back to you shortly!";
  echo "<script type='text/javascript'>if(alert('$sent')){} else window.location = 'contact.php';</script>";
  //echo 'Message has been sent.';
}
?>
