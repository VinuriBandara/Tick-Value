<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'vingi1996@gmail.com';
$mail->Password = 'Vb960130';

$mail->setFrom('vingi1996@gmail.com', 'Vinuri Bandara');
$mail->addAddress('vinugayanthika@gmail.com');
$mail->Subject = 'SMTP email test';
$mail->Body = 'this is some body';

if ($mail->send())
    echo "Mail sent";
?>