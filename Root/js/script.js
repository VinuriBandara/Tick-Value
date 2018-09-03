$(document).ready(function(){
 $("#submit").click(function(){
  var email=$("#email").val();
  var password=$("#password").val();
  if(email==""||password==""){
   $("#success").html('<font style=color:red>Your Email or Password is Empty');
   return false;
  }else{
   $.ajax({
    url:"signup.php",
    type:"POST",
    data:{email:email,password:password},
    success:function(data){
     $("#success").html(data);
    }
   });
   return false;
  }
 });
});
