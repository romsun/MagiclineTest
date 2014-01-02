<html>
<head>
 
  <link rel="stylesheet" href="jquery.mobile-1.3.2.min.css">



  
  <script type="text/javascript" src="jq203.min.js"> </script>
  <script type="text/javascript" src="index.js"> </script>

  <!-- jQuery and jQuery Mobile -->

  <!--  <script src="jquery-1.9.1.min.js"></script> -->
  <script src="...jquery.mobile-1.3.2.min.js"></script>


<script>

$(function()
{
        $('#authForm').submit(function () {
            $.post('http://citifren.com/chat/chat.show.chat.php', $('#authForm').serialize(), function (data, textStatus) {
	$('#auth').html('');
	$('#chat_place').html('<div id=authok onMouseout="javascript:onkan(); loadData()" onClick="javascript:onkan(); loadData()">Thank you ! Your are now logged ! To start chatting, click Chat menu !<?php $c =5; while($max < $c) { echo "<br>"; $max++; } ?></div>'+'');
        //$('#auth').append(data);
        });
        //document.getElementById('chatboxe').value = "";
        //document.getElementById('chatboxe').style.height = "2em";
        // return false;
loadData();
	return false;
        });

});


$(document).ready(function () {
    $("#maybeimage").popeye();
});

</script>


<script>

function fillChat()
{


var holder = document.getElementByID("holder");
var msgNya = document.getElementByID("load_me").value;
var msgNyaFixed = msgNya.toString();
holder.insertAdjacentHTML('beforeend',msgNyaFixed);
}


function checkCookieNe()
{
var user=getCookie("citifren");
if (user!="")
  {
  // alert("Welcome again " + user);
  document.getElementById('auth').value = "Welcome !";
  }
else
  {
  // user = prompt("Please enter your phone number:","");
  if (user!="" && user!=null)
    {
    //setCookie("citifren",user,365);
    }
  }
}


function SubmitForm() {
var username = $("#username").val();
var pass = $("#pass").val();
$.post("tes.post.php", { username: username, pass: pass },

   function(data) {
//     alert("Data Loaded: " + data);
   });
return false;

}

function zoomi(){
 $(document).ready(function(){
        $('.tnail').click(function(){
             $(this).css('width', function(_ , cur){
                  return cur === '100px' ? '100%' : '100px'
            });  
        });
    });
}

function openPopUp(divId)
{
$('#'+divId+'').css('display','block');
$('#'+divId+'').css('top','100px');
$('#'+divId+'').css('left','3px');
$('#'+divId+'').css('position','fixed');
$('#'+divId+'').css('z-index','1');

$('#'+divId+'').dialog();
}
</script>


</script>


<style>
.time {
       font-size: 12px;

}


.tnail {
width: 100px;
}

.tnail2 img:hover{
    -webkit-transform: scale(1.5);
    -moz-transform: scale(1.5);
    -o-transform: scale(1.5);
    -ms-transform: scale(1.5);
    transform: scale(1.5);
}


</style>

</head>


<body onLoad="checkLogin();">

<?php
$receiver = $_GET["whotochat"];
$phone = $_COOKIE['citifren'];
include("db.connect.php");

$TanggalIsi = date("Y-m-d");
$Menit = date("i");

$f = $_SERVER["PHP_SELF"];

$tf = str_replace("/","","$f");


// -------------------------------------------------

#$phone = "08096795005";
$time1 = date("Y-m-d H:i:s");
$time2 = "$TanggalIsi";
#$message = "Hello this message to offline user";
$message = "$isi";
#$receiver = "09096795005";
$status1 = "1";
$status2 = "";
$etc1 = "";
$etc2 = "";

#$browser = @getenv ("HTTP_USER_AGENT");
#$halaman = $_SERVER[SCRIPT_FILENAME];
#$ket = $halaman;

$username4auth = $_GET["username"];
$pass4auth = $_POST["pass"];
$ip = $_POST["ip"];

if($username4auth){ echo "$username4auth"; $cookiename = "citifren"; $value = "$username4auth"; setcookie($cookiename,$value, time()+3600*24); }

	if($receiver =="9999" AND $phone != ""){ echo ""; exit; exit; }elseif($phone == "") { 

	// ================ OFF LINE START =================================================
 	$off = 1;
	if ($off == 0){
	echo ""
	."<div class=divform>"
	."<form id='authForm'>"
	."Phone Number:<br><input style='width:93%; height: 25px' type='text' id='username' name='username' value='$phone'"
	."onClick='offkan()'><br>"
	."Password:<br><input style='width:93%; height: 25px' type='text' id='pass' name='pass' value='' onClick='offkan()'>"
	."<br>"
	."<input type='hidden' value='$_SERVER[REMOTE_ADDR]'>"
	."<input type='submit' name='submit' value='SEND'>"
	.""
	."</div><br><br>"
	.""; exit; exit;  
	}
        // ================ OFF LINE END   =================================================

	?>
	<iframe src="auth.form.php"></iframe>
	<?php
	exit; exit;
	}else {  }

	
	// echo "$time1<br>";


	$sql = "SELECT * FROM  (SELECT * FROM fren_online WHERE phone LIKE '$phone%' AND receiver LIKE '$receiver%' OR receiver LIKE '$phone%' AND phone LIKE '$receiver%'   ORDER BY id DESC LIMIT 7) tmp ORDER BY tmp.id ASC";
	$resultquery = mysql_query($sql);
	if (!$resultquery)
	{
	echo "ERROR".mysql_error($resultquery);
	}else
	{



	if ($row = mysql_fetch_array($resultquery))
        {	

	$divcounter = 0;
	do
	{
        $message = $row["message"];
	$whotochat = $row["receiver"];
	$pic_or_vid = $row["status2"];


        $me = $row["phone"];
        $lastid = $row["id"];

	$t = $row["time1"];
	$time = "$t[11]$t[12]$t[13]$t[14]$t[15]$t[16]$t[17]$t[18]";
        $date = "$t[0]$t[1]$t[2]$t[3]$t[4]$t[5]$t[6]$t[7]$t[8]$t[9]";


        $whochat = $_COOKIE["citifren"];

	if($phone !== "$me"){ $divcolor = "callout right"; $divcounter = 1; 


		// === cek pic or video START -----------------
		if($pic_or_vid == "1") {  


		$m = "$message";
		$message = "<img style='width:50px' id='img$divcounter' onClick='javascript:offkan(); openPopUp($lastid)' 
		width='50px' src=images/$message>"
		."<div id='$lastid' style='display:none;' onClick='onkan(); loadData()'>"
		."Click image to close !: <br><img src='images/$m' style='width:350px'>"
		."</div>"
		."";

	        echo "<p align=left>
        	<table width=100%><tr><td><font class=fontgrey10>[ $receiver ] on </font> <font class=fontgrey10>$date $time</font>"
        	."<table><tr>"
        	."<td valign=top>"
        	."<div class=photo>"
        	."<img width=50px src=$receiver><br>"
        	."</div>"
        	.""
        	."</td>"
        	."<td valign=top class=$divcolorOFF>"
        	."";
        	?>
        	<div id="maybeimage0" class="<?php echo $divcolorOFF;?>">
        	<?php
        	echo ""
        	.""
        	.""
		."$message"
        	."</div>"
        	."</td></tr></table>"
        	."";
        	//<img width=200px src=indri-pinx.png></p>";
        	// echo "<br><br>";
        	echo "</td></tr></table></p>";

		}else   {
        	echo "<p align=left>
        	<table width=100%><tr><td><font class=fontgrey10>[ $receiver ] on </font> <font class=fontgrey10>$date $time</font>"
        	."<table><tr>"
        	."<td valign=top>"
		."<div class=photo>"
		."<img width=50px src=$receiver><br>"
		."</div>"
		.""
		."</td>"
		."<td valign=top class=$divcolor>"
        	."";
        	?>
		<div id="maybeimage0" class="<?php echo $divcolor;?>">
        	<?php
        	echo ""
        	.""
        	."$message"
		."</div>"
        	."</td></tr></table>"
        	."";
        	//<img width=200px src=indri-pinx.png></p>";
        	// echo "<br><br>";
        	echo "</td></tr></table></p>";

		} // === cek pic or video END -----------------
                $m = "";
                $message = "";


	}else { $divcolor = "calloutanswer left"; $divcounter = 0; 


        // === cek pic or video START -----------------
        	if($pic_or_vid == "1") {
        	$len =  "100%";
		$msgalign = "right";
//		$message = "<table width='50px'><tr><td><img width=50px src=images/$message><td></tr></table>";

                $m = "$message";
                $message = "<img style='width:50px' id='img$divcounter' onClick='javascript:offkan(); openPopUp($lastid)'
                width='50px' src=images/$message>"
                ."<div id='$lastid' style='display:none;' onClick='onkan(); loadData()'>"
                ."Click image to close !: <br><img style='width:350px' src='images/$m'>"
                ."</div>"
                ."";

        
		// ---------IMG or VIDEO START -----------------
	        echo "<p align=right>
        	<table width=$len <tr><td align=right>"

        	."<table></tr><td><font class=fontgrey10>$date $time - [ $phone ]</font> </td>"
        	.""
        	."<table><tr><td valign=top class=$divcolorOFF>"
        	?>
        	<div id="maybeimage1" class="<?php echo $divcolorOFF;?>">
        	<?php
        	echo "$message"
        	.""
        	."</div>"
        	."</td>"
        	."<td valign=top>"
        	."<div class=photo>"
        	."<img width=50px src=$phone.png>"
        	."</div>"
        	."</td>"
        	."";

        	echo ""
        	.""
        	."</tr></table>"
        	."";
        	//<img width=200px src=indri-pinx.png></p>";
        	// echo "<br><br>";
        	echo "</td></tr></table></p>";
		// -------- IMG OR VIDEO END   ------------------


		// -------- Text message START -----------------
		}else{ $len = "100%"; 

		echo "<p align=right>
		<table width=$len <tr><td align=right>"

		."<table></tr><td><font class=fontgrey10>$date $time - [ $phone ]</font> </td>"
		.""
		."<table><tr><td valign=top class=$divcolor>"
		?>
 		<div id="maybeimage1" class="<?php echo $divcolor;?>">
		<?php
		echo "$message"
		.""
		."</div>"
		."</td>"
		."<td valign=top>"
		."<div class=photo>"
		."<img width=50px src=$phone.png>"
		."</div>"
		."</td>"
		."";

		echo ""
		.""
		."</tr></table>"
		."";
		//<img width=200px src=indri-pinx.png></p>"; 
		// echo "<br><br>";
		echo "</td></tr></table></p>";
		}
		// -------- Text message END  -----------------

	$m = "";
        $message = "";

	}




	}while($row = mysql_fetch_array($resultquery));



	}


        }


?>

