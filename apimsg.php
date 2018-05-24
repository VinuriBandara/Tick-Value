<?php
	// Authorisation details.
	$username = "vingi1996@gmail.com";
	$hash = "a53222b824c0c67dc072d9826895739fa468775c63e2b19c06462430b65f48f5";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TickValue"; // This is who the message appears to be from.
	$numbers = "94721997655, 94"; // A single number or a comma-seperated list of numbers
	$message = "There we go";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
?>