<?php


function Connect()
{

 // Create connection
 $conn = mysqli_connect("127.0.0.1", "root","","glasswap") ;

 return $conn;
}

?>
