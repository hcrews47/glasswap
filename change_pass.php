<?php

include_once 'connection.php';
session_start();
$conn    = Connect();
$Password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query   = "SELECT password FROM userinfo WHERE email = '".$_SESSION['email']."'";
// $query   = "SELECT password FROM userinfo WHERE email = ".$_SESSION['email'];

$result = mysqli_query($conn,$query)->fetch_assoc()["password"];
// $result2 = mysqli_query($conn, $query2)->fetch_assoc()["password"];

$pass_check = password_verify($_POST['password'], $result);

if ($pass_check) {
  header("location: edit_account.php");

  //header("Location: register.php");
    // print 'You have already signed up!';
}
else{
  header("location: enterpassword.php");
}

mysqli_close($conn);
?>
