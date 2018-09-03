<?php

$dbhost="localhost";
$username="root";
$password="root";
$db="vinu";



$conn=new mysqli("$dbhost","$username","$password","$db");

 if(mysqli_connect_error())
 {
 	echo"oops";
 	die('Connect Error ('.mysqli_connect_errno() .') '. mysqli_connect_error());
 }
 else
 {
 	$planNo=$_REQUEST["planNo"];
 	$lotNo=$_REQUEST["lotNo"];
 	$pdate=$_REQUEST["plandate"];
 	$surveyname=$_REQUEST["surveyor"];
 	$nrth=$_REQUEST["n"];
 	$ps=$_REQUEST["p"];
 	$ls=$_REQUEST["l"];
 	$bl=$_REQUEST["b"];

 }

$sql="INSERT INTO survey(Plan_No,Lot_No,Plan_Date,Surveyor,North,Well,Limits,Building) values('$planNo',$lotNo,'$pdate','$surveyname','$nrth','$ps','$ls','$bl')";
if($conn -> query($sql))
{
	echo"Record inserted";
}
else
{
	echo "Error:". $sql ."<br>" . $conn->error;
}
$conn ->close();
?>

