$(document).ready(function(){
$("#submit").click(function(){

var fname = $("#fname").val();
var lname = $("#lname").val();
var addrs = $("#adrs").val();
var email = $("#email").val();
var landn = $("#land").val();
var mobile= $("#mobno").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'fname1='+ fname + '&lname1='+ lname + '&address1='+ addrs + '&email1='+ email + '&landno1=' + landn + '$mob1=' + mobile;

// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "reg.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});

return false;
});
});