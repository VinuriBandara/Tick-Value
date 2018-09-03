<?php
  $conn=new mysqli('localhost','root','root','vinu');
  if(!empty($_POST['email'])){
  $email=$_POST['email'];  

  //Checking for Email Availablity
  if(!empty($email)){
   $result=mysqli_query($conn,"SELECT*FROM user WHERE email='$email'");
   $count= $result->num_rows;
   if($count==0){
    $ok='';
   }else{
    echo 'Email Already Exist<br>';
   }
  }
  
  if(isset($ok)){
  //Generating Random Username
  function generateRandomUsername($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%^&*';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$username=strtoupper(generateRandomUsername());
//End Random Username
 
}
  }else{
   echo 'Your Email Empty';
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
 
$my_passwords = randomPassword(10,1,"lower_case,upper_case,numbers,special_symbols");
 
echo $my_passwords;

$result=mysqli_query($conn,"INSERT INTO user(username,password,email)VALUES('$username','$my_passwords','$email')");
 if($result){
  echo "Registration Success.Unique Username is:<font color=green><b>$username</b></font><br>";
 }else{
  echo "Sorry Failed to Registration.Try Again";
 }


?>