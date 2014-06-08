<?php
	$to = "jmartinez@imaginacionweb.net,jdrendon@imaginacionweb.net"; /*Your Email*/
	$subject = "Messsage from Folkin"; /*Issue*/
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 	
	$msg="
	Email: $_REQUEST[email]
	
	Message sent from website on date  $date, hour: $time.\n

	Message:
	$_REQUEST[message]";

	mail($to, $subject, $msg, "From: $_REQUEST[email]");
	echo "Thank you for your message";
?>
