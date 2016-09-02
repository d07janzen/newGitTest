<?php

$to = $_POST['userEmail'];
$subject = "GDS Appraisal App Website - Account Information";
$txt = "You're account has been ". $_POST['textEmail'] .".";
$headers = "From: ". $_POST['adminEmail']; 

if (mail($to,$subject,$txt,$headers)) {
	echo "Mail was successfully accepted for delivery,";
}else{
	echo "Mail was not successfully accepted for delivery,";
}

?>