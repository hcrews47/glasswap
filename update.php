<?php
session_start();
include_once 'connection.php';
$conn = Connect();

// $empty = FALSE;
//
// foreach ($_POST as $key)
// {
//     if (!isset($key) || strlen(trim($key)) != 0)
//     {
//       $empty = TRUE;
//     }
// }


    $Name = $_POST['name'];
    $Password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $CPassword = $_POST['password2'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $State = $_POST['state'];
    $Zip = $_POST['zip'];

$updates = array();
if (!empty($Name))
  $updates[] = 'name="'.mysqli_real_escape_string($conn,$Name).'"';
if (!empty($Password))
  $updates[] = 'password="'.mysqli_real_escape_string($conn,$Password).'"';
if (!empty($Address))
  $updates[] = 'address="'.mysqli_real_escape_string($conn,$Address).'"';
if (!empty($City))
  $updates[] = 'city="'.mysqli_real_escape_string($conn,$City).'"';
if (!empty($State))
  $updates[] = 'state="'.mysqli_real_escape_string($conn,$State).'"';
if (!empty($Zip))
  $updates[] = 'zip="'.mysqli_real_escape_string($conn,$Zip).'"';
$updates = implode(', ', $updates);

$query = "UPDATE userinfo SET '$updates' WHERE email='".$_SESSION['email']."'";
$result = mysqli_query($conn, $query);
?>
