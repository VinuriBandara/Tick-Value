$(document).ready(function(){
$("#submit").click(function(){

var fname = $("#fname").val();
var lname = $("#lname").val();
var email = $("#email").val();
var contact = $("#mbno").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'fname1='+ fname + '&lname1='+ lname + '&email1='+ email + '&contact1='+ contact;
if(fname==''||lname==''||email==''||contact=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});