<?php 

$user_id = $_POST['userId'];

require_once("class.admin.php");
$admin = new ADMIN();

$stmt = $admin->runQuery("DELETE FROM users WHERE id=:id");
$stmt->execute(array(":id"=>$user_id));

 ?>