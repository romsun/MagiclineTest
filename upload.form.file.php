<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title></title>


  <link rel="stylesheet" href="jquery.mobile-1.3.2.min.css">
  <link rel="stylesheet" href="jquery.popeye.css">
  <link rel="stylesheet" href="jquery.popeye.style.css">


  <script type="text/javascript" src="jq203.min.js"> </script>
  <script type="text/javascript" src="index.js"> </script>

 <script src="jquery.popeye-2.1.js"></script>
  <script src="jquery.popeye-2.1.min.js"></script>


<style type="text/css">

/*
.NFI-wrapper {}
.NFI-button {}
.NFI-button:hover {}
.NFI-filename {}
.NFI-current {}
*/

.nice {
	font-family: arial;
	font-size: 12px;
	-webkit-box-shadow: 0px 1px 0px #fff, 0px -1px 0px rgba(0,0,0,.1);
	-moz-box-shadow: 0px 1px 0px #fff, 0px -1px 0px rgba(0,0,0,.1);
	box-shadow: 0px 1px 0px #fff, 0px -1px 0px rgba(0,0,0,.1); 
	-moz-border-radius: 4px; 
	-webkit-border-radius: 4px;
	border-radius: 4px;
}
.nice .NFI-button {
	-moz-border-radius-topleft: 3px; 
	-moz-border-radius-bottomleft: 3px;
	-webkit-border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-top-left-radius: 3px; 
	border-bottom-left-radius: 3px;

	background-color: #0192DD;

	background-image: linear-gradient(bottom, #1774A3 0%, #0194DD 56%);
	background-image: -o-linear-gradient(bottom, #1774A3 0%, #0194DD 56%);
	background-image: -moz-linear-gradient(bottom, #1774A3 0%, #0194DD 56%);
	background-image: -webkit-linear-gradient(bottom, #1774A3 0%, #0194DD 56%);
	background-image: -ms-linear-gradient(bottom, #1774A3 0%, #0194DD 56%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, #1774A3),
		color-stop(0.56, #0194DD)
	);
	text-shadow: 0px -1px 0px #0172bd;
	border: solid #0172bd 1px;
	border-bottom: solid #00428d 1px;
	
	-webkit-box-shadow: inset 0px 1px 0px rgba(255,255,255,.2);
	-moz-box-shadow: inset 0px 1px 0px rgba(255,255,255,.2);
	box-shadow: inset 0px 1px 0px rgba(255,255,255,.2); 	
	
	color: #fff;
	width: 100px;
	height: 30px;
	line-height: 30px;
}
.nice .NFI-button:hover {
	background: #333;
	text-shadow: 0px -1px 0px #111;
	border: solid #000 1px;
	
}
.nice .NFI-filename {
	-moz-border-radius-topright: 3px; 
	-moz-border-radius-bottomright: 3px;
	-webkit-border-top-right-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	border-top-right-radius: 3px; 
	border-bottom-right-radius: 3px;

	width: 100px;
	border: solid #777 0px;
	border-left: none;
	height: 30px;
	line-height: 30px;
	
	background: #fff;
	-webkit-box-shadow: inset 0px 2px 0px rgba(0,0,0,.05);
	-moz-box-shadow: inset 0px 2px 0px rgba(0,0,0,.05);
	box-shadow: inset 0px 2px 0px rgba(0,0,0,.05); 

	color: #777;
	text-shadow: 0px 1px 0px #fff;
}


.test .NFI-button{
	background-color: #DD9201; /* 1774A3, 0192DD : A37417, DD9201 */ 
	background-image: linear-gradient(bottom, #A37417 0%, #DD9201 56%);
	background-image: -o-linear-gradient(bottom, #A37417 0%, #DD9201 56%);
	background-image: -moz-linear-gradient(bottom, #A37417 0%, #DD9201 56%);
	background-image: -webkit-linear-gradient(bottom, #A37417 0%, #DD9201 56%);
	background-image: -ms-linear-gradient(bottom, #A37417 0%, #DD9201 56%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, #A37417),
		color-stop(0.56, #DD9201)
	);
	background-image: url("Allah.jpg");
	text-shadow: none;
	border: solid #bb7200 1px;
	border-bottom: solid #995200 1px;
}
.test .NFI-button:hover {
	background: #bb7200;
	text-shadow: none;
	border: solid #995200 1px;	
}
.test .NFI-filename {
	border: solid #eee 1px;
	color: #777;
}

.gobutton {
        font-family: arial;
        font-size: 12px;
        -webkit-box-shadow: 0px 1px 0px #fff, 0px -1px 0px rgba(0,0,0,.1);
        -moz-box-shadow: 0px 1px 0px #fff, 0px -1px 0px rgba(0,0,0,.1);
        box-shadow: 0px 1px 0px #fff, 0px -1px 0px rgba(0,0,0,.1);
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        border-radius: 4px;
}

        </style>



</head>

<script>
function sendwhotochat(){
//var whotochat = $('#whotochat').val();
var whotochat = parent.document.getElementById('whotochat').value;
var nilai = document.getElementById("sendwhotochat");
nilai.value = whotochat;
}

</script>

<body onLoad="sendwhotochat()">
<?php

$submit = $_POST["submit"];
$userphone = $_POST["userphone"];
$whotochat = $_POST["sendwhotochat"];
$userphone = $whotochat;
//$filename = "$_FILES[file][name]"; 

$imagetypes = array(
    'image/png' => '.png',
    'image/gif' => '.gif',
    'image/jpeg' => '.jpg',
    'image/bmp' => '.bmp');
$ext = $imagetypes[$_FILES['file']['type']];

date_default_timezone_set('Asia/Jakarta');
$d = date("Ymd-h-s-m");
$fname = "$userphone-$d$ext";
$filename = "$fname";
$uploaded = move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$fname);
//$uploaded = move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
$error = $_FILES['file']['error'];
if($submit)
{
	if($uploaded)
        {
        $name = $_FILES["file"]["name"];
        include("upload.ok.php");

	$uploadfile = "yes";
	include("chat.put.msg.doit.php");

        }else { echo "Error $error";  print_r($error);  }

}

?>

<script src="jquery.min.js">
$(function()
{
        $('#uploadForm').submit(function () {
            $.post('http://citifren.com/chat/upload.form.file.php', $('#uploadForm').serialize(), function (data, textStatus) {
                 $('#result').append(data);
            });

            return false;
        });

});

</script>
<script src=jquery.fileupload.js></script>
<script type="text/javascript">
/* <![CDATA[ */
$(document).ready(function(){
	// your code...
	$("input[type=file]").nicefileinput();
});


</script>

<form method="post"   enctype="multipart/form-data"  id="uploadForm" action="http://citifren.com/chat/upload.form.file.php">
<table><tr><td>
<input type="file" name="file" class="nicefileinput nice">
<input type="hidden" name="userphone" value="<?php $id = $_COOKIE['citifren']; echo $id;?>">
<input type="hidden" name="sendwhotochat" id="sendwhotochat" value="">
</td><td>
<input type=submit name=submit value=GO class=gobutton>
</td></tr></table>
</form>
<div id="elementinsideiframe">Upload your picture or video</div>
<?php
?>


<?php ?>
