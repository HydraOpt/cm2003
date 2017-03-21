<?php
    $link = mysqli_connect("eu-cdbr-azure-north-e.cloudapp.net", "befc77d2972871", "032b4371", "big_daddy");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$query = "INSERT INTO `organization`(`name`, `address`, `phone_number`, `email`) VALUES($name, $address, $phone, $email)";
mysqli_query($link, $query);
mysqli_close($link);
?>