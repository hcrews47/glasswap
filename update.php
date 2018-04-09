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
  $updates[] = "name='$Name'";
if (!empty($_POST['password']))
  $updates[] = "password='$Password'";
if (!empty($Address))
  $updates[] = "address='$Address'";
if (!empty($City))
  $updates[] = "city='$City'";
if (!empty($State))
  $updates[] = "state='$State'";
if (!empty($Zip))
  $updates[] = "zip='$Zip'";
$updates = implode(', ', $updates);

echo $updates;

$query = "UPDATE userinfo SET $updates WHERE email='".$_SESSION['email']."'";
echo $query;
$result = mysqli_query($conn, $query);
header("location: my_account.php")
?>
