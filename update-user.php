<?php 

$user_id = $_POST['userId'];
$new_status = $_POST['newStatus'];
$admin_id = $_POST['adminId'];

require_once("class.admin.php");
$admin = new ADMIN();

if ($admin->updateStatusOfUser($user_id, $new_status)) {

	if ($new_status == 'Active') 
		$new_status = 'Activated';
	
	if ($admin->insertTransactionHistory($new_status, $admin_id, $user_id)){

	} 

}

 ?>