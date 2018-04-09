<?php

include_once 'connection.php';
require 'vendor\phpmailer\phpmailer\class.phpmailer.php';
$mail = new PHPMailer;

$conn    = Connect();
$Name    = $_POST['name'];
$Email   = $_POST['email'];
$Password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$Address = $_POST['address'];
$City = $_POST['city'];
$State = $_POST['state'];
$Zip = $_POST['zip'];

$query   = "INSERT INTO userinfo (name,email,password,address,city,state,zip) VALUES('$Name','$Email','$Password','$Address','$City','$State','$Zip')";
$result = mysqli_query($conn,$query);
//
if (mysqli_errno($conn) == 1062) {
  $message = "This email is already in use.\\nTry a different email.";
  echo "<script type='text/javascript'>if(alert('$message')){} else window.location = 'register.php';</script>";
  //header("Location: register.php");
    // print 'You have already signed up!';
}

if(mysqli_errno($conn)!=1062){
  $mail->setFrom('glasswap@gmail.com', 'glasswap');
  $mail->addAddress($Email, $Name);
  $mail->Subject  = "Welcome to glasswap!";
  $mail->Body     = "Thank you for registering with the glasswap, $Name! We look forward to doing business with you! If you have any questions, feel free to reach out to us at glasswap@gmail.com.\n \n
  Best,\n
  The glasswap team";
  if(!$mail->send()) {
    $not_sent = 'An error occurred. Try registering again.';
    echo "<script type='text/javascript'>if(alert('$not_sent')){} else window.location = 'contact.php';</script>";
    //echo 'Mailer error: ' . $mail->ErrorInfo;
  } else {
    session_destroy();
    session_start();
    $_SESSION['logon'] = true;
    $_SESSION['email'] = $Email;
    $_SESSION['password'] = $Password;
    $sent = "You have registered successfully!";
    echo "<script type='text/javascript'>if(alert('$sent')){} else window.location = 'member_page.php';</script>";

    //echo 'Message has been sent.';
  }
}
//
// if (mysqli_errno($conn) == 1062) {
//   header("Location: register.php");
//     // print 'You have already signed up!';
// }
// if(isset($Email)){
//   $mysql_get_users = mysqli_query($conn, "SELECT * FROM userinfo where email='$Email'");
//
//   $get_rows = mysqli_affected_rows($conn);
//
//   if($get_rows >= 1){
//     echo "You have already signed up!";
//     die();
//   }
// }
?>
