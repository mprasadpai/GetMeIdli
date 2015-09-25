<?php
require_once('order_connections.php');//the file with connection code and functions

$name = $_GET["name"];
$email = $_GET["email"];
$number = $_GET["number"];
$location = $_GET["address"];
$phone = $_GET["phone"];


mysqli_query($visitors,"INSERT INTO `order`( `Name`, `Email`, `Number`, `Location`, `Phone`) VALUES ('$name','$email','$number','$location','$phone')");

?>
