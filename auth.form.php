<!DOCTYPE html>
<html>
<head>


  <link rel="stylesheet" href="jquery.mobile-1.3.2.min.css">

  <script type="text/javascript" src="jq203.min.js"> </script>
  <script type="text/javascript" src="index.js"> </script>


  <!--  <script src="jquery-1.9.1.min.js"></script> -->
  <script src="jquery.mobile-1.3.2.min.js"></script>


</head>

<div data-role="page" id="authpage" data-theme="a" >


        <div data-role="header">
        <h1><font color=#df0101>Please Login</font></h1>
        </div><!-- /header -->
<div data-role="content">

<?php
$ test = "";
$username4auth = $_POST["username"];
$pass4auth = $_POST["pass"];
$ip = $_POST["ip"];

if($username4auth){ 
echo "Thank you for registration. You are logged: $username4auth"; $cookiename = "citifren"; $value = "$username4auth"; 
setcookie($cookiename,$value, time()+3600*24); 
exit; exit; }elseif($username4auth == ""){ //echo "Here you are !"; 

}else{ }

?>

<div id="authformdiv" data-role="content">
<?php
//        if($receiver =="9999" AND $phone != ""){ echo ""; exit; exit; }elseif($phone == "") {

        echo "
        <div style='width:200px;' onMouseOver='parent.removeWelcome(); parent.offkan()' onClick='parent.removeWelcome()'>
        <form id='authForm' method='post' action='http://citifren.com/chat/auth.form.php'>
        Phone Nomor:<br><input style='width:93%; height: 25px' type='text' id='username' name='username' value='$phone'
        onClick='parent.offkan()'><br>
        Password:<br><input style='width:93%; height: 25px' type='text' id='pass' name='pass' value='' onClick='offkan()'>
        <br>
        <input type='hidden' value='$_SERVER[REMOTE_ADDR]'>
        <input type='submit' name='submit' value='SEND' onclick='javascript:parent.showhide(authFrame)'>

        </div><br><br>
        ";

	}else { }

?>

</div> <!-- auth form div END -->

<script>

function SubmitForm() {
var username = $("#username").val();
var pass = $("#pass").val();
$.post("auth.form.php", { username: username, pass: pass },
   function(data) {
//     alert("Data Loaded: " + data);
   });
return false;

}
</script>
</div><!-- /data-role=content -->


</div><!--  /------ data-role=page--- -->
