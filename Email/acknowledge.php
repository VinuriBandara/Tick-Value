<?php

if (isset($_POST['send']))
	{
		$to='vinugayanthika@gmail.com';
		$subject= 'Feedback from my site';

		$msg ='Name:' .$_POST['name'] . "\r\n\r\n";
		$msg .='Email:' .$_POST['email'] . "\r\n\r\n";
		$msg .='Comments:' .$_POST['comments'] ;

		echo $msg;

		$headers ="From:vinugayanthika@gmail.com\r\n";
		$headers .='Content-Type:text/plain; charset=utf-8';

		$email =filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL	);
		if ($email)
		{
			$headers .="\r\nReply-To : $email";
		}

		$success = mail($to, $subject, $msg, $headers, '-vinugayanthika@gmail.com');
	}







?>
<html>

<body>
	<?php
	if (isset($success) && $success) 
		{
	?>
	<h1>Thank you</h1>
	<?php
		}
		else
			{ ?>
				<h1>Oops</h1>
				<?php } ?>



</body>



</html>