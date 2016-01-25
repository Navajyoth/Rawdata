<?php
	$from = $_POST["email"];
	$subject = $_POST["name"] . " " . $_POST["subject"];
	$message = $_POST["message"] . " - Phone# " . $_POST["phone"];
	mail("arunghosh@gmail.com", $subject, $message, "From: $from\n");
	mail("arun@rawdatatech.com", $subject, $message, "From: $from\n");
	mail("chacko@rawdatatech.com", $subject, $message, "From: $from\n");
	echo "Thank you for contacting us.";
?>
