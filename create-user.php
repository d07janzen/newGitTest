<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$contactNumber = $_POST['contactNumber'];
$email = $_POST['email'];
$password = $_POST['password'];
$status = 'Pending';

require_once("class.user.php");
$user = new USER();

$user->register($firstName, $lastName, $contactNumber, $email, $password, $status);

 ?>