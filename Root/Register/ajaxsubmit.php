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
 	$fname2=$_POST['fname1'];
	$lname2=$_POST['lname1'];
	$email2=$_POST['email1'];
	$contact2=$_POST['contact1'];



	if(!empty($email2)){
   $result=mysqli_query($conn,"SELECT*FROM form_element WHERE email='$email2'");
   $count= $result->num_rows;
   if($count==0){
    $ok='';
   }else{
    echo 'Email Already Exists<br>';
   }
  }
  
  if(isset($ok)){
  //Generating Random Username
  function generateRandomUsername($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//End Random Username
 
}
  


  function randomPassword($length,$count, $characters) {
 
// $length - the length of the generated password
// $count - number of passwords to be generated
// $characters - types of characters to be used in the password
 
// define variables used within the function    
    $symbols = array();
    $passwords = '';
    $used_symbols = '';
    $pass = '';
 
// an array of different character types    
    $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
    $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols["numbers"] = '1234567890';
    $symbols["special_symbols"] = '!?~@#-_+<>[]{}';
 
    $characters = split(",",$characters); // get characters types to be used for the passsword
    foreach ($characters as $key=>$value) {
        $used_symbols .= $symbols[$value]; // build a string with all characters
    }
    $symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1
     
    for ($p = 0; $p < $count; $p++) {
        $pass = '';
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $symbols_length); // get a random character from the string with all characters
            $pass .= $used_symbols[$n]; // add the character to the password string
        }
        $passwords = $pass;
    }
     
    return $passwords; // return the generated password
}

$username=strtoupper(generateRandomUsername()); 
$my_passwords = randomPassword(10,1,"lower_case,upper_case,numbers,special_symbols");
 



$sql="insert into form_element(fname,lname,email,contact,username,password) values ('$fname2', '$lname2', '$email2','$contact2','$username','$my_passwords')";
 }


 if($conn -> query($sql))
{
	echo"Record succesfully inserted";
}
else
{
	echo "Error:". $sql ."<br>" . $conn->error;
}
$conn ->close();





?>
