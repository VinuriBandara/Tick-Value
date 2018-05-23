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

 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $add=$_POST['adres'];
 $email=$_POST['email'];
 $lno=$_POST['landn'];
 $mobno=$_POST['mobno'];




 else
 {
 	$sql="INSERT INTO clients(FirstName,LastName,Address,Email,Landline,MobileNo) values ('$fname','$lname','$add','$email',$lno,$mobno)";
 }

if($conn -> query($sql))
{
	echo"Record inserted";
}
else
{
	echo "Error:". $sql ."<br>" . $conn->error;
}
$conn ->close();

// $dbhost="localhost";
// $username="root";
// $password="root";
// $db="vinu";
// conn=new mysqli("$dbhost","$username","$password");
// echo "Connected";
// mysql_select_db("$db");
// echo "database selected";

// $query="insert into table_1(ID,Name,Address) values (123,'vinuri','eafsddv')";

// $sql=mysql_query($query);
// echo "inserted";
?>

