<?php
// The back-end then will determine if the email is available or not,
// and finally returns a JSON { "valid": true } or { "valid": false }
// The code bellow demonstrates a simple back-end written in PHP

// Get the email from request
$email = $_POST['ipt-email'];

// Check its existence 
require_once("class.admin.php");
$admin = new ADMIN();

  $stmt = $admin->runQuery("SELECT email FROM users WHERE email=:email");
  $stmt->execute(array(':email'=>$email));
  $row=$stmt->fetch(PDO::FETCH_ASSOC);

  if ($stmt->rowCount() != 1) 
  	$isAvailable = true;
  else
  	$isAvailable = false;

// Finally, return a JSON
echo json_encode(array(
    'valid' => $isAvailable,
));

?>
