<?php

include_once 'connection.php';
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

if (mysqli_errno($conn) == 1062) {
    print 'You have already signed up!';
}

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
