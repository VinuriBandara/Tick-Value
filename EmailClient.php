<?php
$dbhost="localhost";
$username="root";
$password="root";
$db="mydba";

$conn=new mysqli("$dbhost","$username","$password","$db");

 if(mysqli_connect_error())
 {
    echo"oops";
    die('Connect Error ('.mysqli_connect_errno() .') '. mysqli_connect_error());
 }

 else
 {

    $result = mysqli_query($conn, "SELECT email from form_element where id='2'");
    $row = mysqli_fetch_array($result);
    $to = $row["email"];


 
        $name =  htmlspecialchars($_GET['fname']);
        $email = htmlspecialchars($_GET['email']);
        $message = $_GET['message'];
        $subject = 'Hello There';
        $body = "E-Mail: $email\n Message: $message";
        if (mail($to, $subject, $body)) {

        $result='<div class="alert alert-success">Your email has been sent</div>';
             }else{
        $result='<div class="alert alert-danger">Sorry there was an error sending your message.</div>';
    }



}