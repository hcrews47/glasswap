<?php

include_once 'connection.php';

$conn    = Connect();
$Email    = $_POST['email'];
$Password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query   = "SELECT email FROM userinfo WHERE email = '$Email'";
$query2   = "SELECT password FROM userinfo WHERE email = '$Email'";

$result = mysqli_query($conn,$query);
$result2 = mysqli_query($conn, $query2)->fetch_assoc()["password"];

$pass_check = password_verify($_POST['password'], $result2);

$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if ($count != 1 || !password_verify($_POST['password'], $result2)) {
  $message = "Invalid username or password.";
  echo "<script type='text/javascript'>if(alert('$message')){} else window.location = 'login.php';</script>";
  //header("Location: register.php");
    // print 'You have already signed up!';
}
else {
  session_destroy();
  session_start();
  $_SESSION['logon'] = true;
  $_SESSION['email'] = $Email;
  $_SESSION['password'] = $Password;
  header("location: member_page.php");
}
mysqli_close($conn);
?>
