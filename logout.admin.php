<?php
	require_once('session.admin.php');
	require_once('class.admin.php');
	$user_logout = new ADMIN();
	
	if($user_logout->is_loggedin()!="")
	{
		$user_logout->redirect('adminpanel.php');
	}
	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		$user_logout->doLogout();
		$user_logout->redirect('adminlogin.php');
	}
?>