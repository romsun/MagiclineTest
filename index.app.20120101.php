<!DOCTYPE html>
<?php
$cookiename = "citifren";
$value = "08096795005";

if (!isset($_COOKIE['citifren'])) {
 // setcookie($cookiename,$value, time()+3600*24);
 // Set non aktif - untuk Android IOS app set menggunakan javascript bukan PHP
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title></title>
 
 
  <link rel="stylesheet" href="jquery.mobile-1.3.2.min.css">

  <script type="text/javascript" src="jq203.min.js"> </script>
  <script type="text/javascript" src="index.js"> </script>

  <!-- jQuery and jQuery Mobile -->



<style>
div#fullyaa.ui-collapsible div.ui-collapsible-content {
    margin: 1px 0 0 0 ;
    background: url(".xchat-bg.png");
}
</style>

<style>

.fontgrey10 {FONT-FAMILY: Arial, Helvetica, sans-serif; 
    FONT-SIZE: 10px; 
    FONT-WEIGHT: none; 
    COLOR: #585858}

/* info button override */
.ui-icon-phone {
    background: url(images/phone-black.png) 50% 50% no-repeat;
    background-position: 0px 50%;
    background-size: 25px 25px;
    width: 25px;
    border: 0px;
    height: 25px;
    margin-top: 5px !important;
    box-shadow: none;
    -webkit-box-shadow: none;
   left: 30%;
}

.divform {
        background-color: #a9e2f3;
        background-image: -moz-linear-gradient(top, #a9e2f3, #dedede);
        position: relative;
	width: 97%;
        color: #000000;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 30px #dedede;
        margin: 5px;
        border: 1px solid #1AB5E0;
        text-shadow: 0 0 1px #6e6e6e;
        box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset;*/
}

.divforminput {
        background-color: #a9e2f3;
        background-image: -moz-linear-gradient(top, #a9e2f3, #dedede);
        position: relative;
        width: 99%;
        right: 10px;
        color: #000000;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 30px #dedede;
        margin: 5px;
        border: 1px solid #1AB5E0;
        text-shadow: 0 0 1px #6e6e6e;
        /* box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset; */
}

.gobutton {
        font-family: arial;
        font-size: 12px;
        -webkit-box-shadow: 0px 1px 0px #fff, 0px -1px 0px rgba(0,0,0,.1);
        -moz-box-shadow: 0px 1px 0px #fff, 0px -1px 0px rgba(0,0,0,.1);
        box-shadow: 0px 1px 0px #fff, 0px -1px 0px rgba(0,0,0,.1);
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
}


div.photo img{
        background-color: #a4a4a4;
        background-image: -moz-linear-gradient(top, #848484, #a4a4a4);
        position: relative;
        color: #111111;
        padding: 2px;
        border-radius: 3px;
        box-shadow: 0px 0px 15px #dedede;
        margin: 5px;
        min-height: 25px;
        border: -10px solid #;
        text-shadow: 0 0 1px #6e6e6e;
        /*box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset;*/
}

div.photoofweek img{
        background-color: #a4a4a4;
        background-image: -moz-linear-gradient(top, #848484, #a4a4a4);
        position: relative;
        color: #111111;
        padding: 2px;
        border-radius: 50px;
        box-shadow: 15px 15px 15px #585858;
        margin: 3px;
        min-height: 25px;
        border: 10px inset #d8d8d8;
        text-shadow: 0 0 1px #6e6e6e;
        /*box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset;*/
}


div.callout {
        background-color: #a9e2f3;
        background-image: -moz-linear-gradient(top, #a9e2f3, #dedede);
        position: relative;
        color: #000000;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 30px #dedede;
        margin: 5px;
        min-height: 25px;
        border: 1px solid #1AB5E0;
        text-shadow: 0 0 1px #6e6e6e;

        /*box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset;*/
}



.callout.right::before {
        left: -29px;
        top: 10px;
        border-right: 20px solid #a9e2f3;
}

div.navigasi {
        background-color: #848484;
        background-image: -moz-linear-gradient(top, #585858, #a4a4a4);
        position: relative;
        color: #111111;
        padding: 3px;
        border-radius: 3px;
        box-shadow: 0px 0px 25px #dedede;
        margin: 5px;
        min-height: 25px;
        border: -10px solid #;
        text-shadow: 0 0 0px #6e6e6e;
        /*box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset;*/
}

td.callout {
        background-color: #01a9db;
        background-image: -moz-linear-gradient(top, #01a9db, #01a9db);
        position: relative;
        color: #111111;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 0px #;
        margin: 5px;
        min-height: 50px;
        border: 1px solid #01a9db;
        text-shadow: 0 0 1px #6e6e6e;
	width: 100%;
        /*box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset;*/
}
.callout::before {
        content: "";
        width: 0px;
        height: 0px;
        border: 0.8em solid transparent;
        position: absolute;
}

.callout.top::before {
        left: 45%;
        bottom: -20px;
        border-top: 10px solid #444;
}

.callout.bottom::before {
        left: 5px;
        top: -25px;
        border-bottom: 35px solid #58FA58;
}

.callout.left::before {
        right: -20px;
        top: 15%;
        border-left: 20px solid #dedede;
}

i.callout.rightold::before {
        left: -29px;
        top: 25px;
        border-right: 20px outset #a9e2f3;
        background-image: -moz-linear-gradient(top, #01a9db, #01a9db);
        box-shadow: 0px 0px 30px #dedede;

        border-radius: 10px;
        box-shadow: 0px 0px 0px #;
        margin: 5px;

}


.callout.top-left::before {
        left: 7px;
        bottom: -20px;
        border-top: 10px solid #444;
}

.callout.top-right::before {
        right: 7px;
        bottom: -20px;
        border-top: 10px solid #444;
}

div.calloutanswer {
        background-color: #d8d8d8;
        background-image: -moz-linear-gradient(top, #d8d8d8, #d8d8d8);
        position: relative;
        color: #111111;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 30px #f2f2f2;
        margin: 5px;
        min-height: 25px;
        border: 1px solid #dedede;
        text-shadow: 0 0 1px #585;

        /*box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset;*/
}

td.calloutanswer {
        background-color: #01a9db;
        background-image: -moz-linear-gradient(top, #01a9db, #01a9db);
        position: relative;
        color: #111111;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 30px #;
        margin: 5px;
        min-height: 50px;
        border: 1px solid #01a9db;
        text-shadow: 0 0 0px #01a9db;
        width: 100%;
        /*box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset;*/
}


.calloutanswer::before {
        content: "";
        width: 0px;
        height: 0px;
        border: 0.8em solid transparent;
        position: absolute;
}

.calloutanswer.top::before {
        left: 45%;
        bottom: -20px;
        border-top: 10px solid #444;
}

.calloutanswer.bottom::before {
        left: 5px;
        top: -25px;
        border-bottom: 35px solid #e6e6e6;
}

.calloutanswer.left::before {
        right: -29px;
        top: 10px;
        border-left: 20px solid #d8d8d8;
}

.calloutanswer.right::before {
        left: -20px;
        top: 15%;
        border-right: 20px solid #01df3a;

}

.calloutanswer.top-left::before {
        left: 7px;
        bottom: -20px;
        border-top: 10px solid #444;
}

.calloutanswer.top-right::before {
        right: 7px;
        bottom: -20px;
        border-top: 10px solid #444;
}


.time {
       size: 7px;
       
}

iframe {
  margin-top: 20px;
  margin-bottom: 30px;
  margin-left: 25px;
  margin-right: 30px;
  -moz-border-radius: 12px;
  -webkit-border-radius: 12px; 
  border-radius: 12px; 

  -moz-box-shadow: 4px 4px 14px #000; 
  -webkit-box-shadow: 4px 4px 14px #000; 
  box-shadow: 4px 4px 14px #000; 

  -moz-transform:rotate(0deg);
  -webkit-transform:rotate(0deg);
  -o-transform:rotate(0deg);
  -ms-transform:rotate(0deg);
  filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=.1);
}

.boxshadow {
  margin-top: 20px;
  margin-bottom: 30px;
  margin-left: 25px;
  margin-right: 30px;
  -moz-border-radius: 12px;
  -webkit-border-radius: 12px;
  border-radius: 12px;
  width: 700px;

  -moz-box-shadow: 4px 4px 14px #000;
  -webkit-box-shadow: 4px 4px 14px #000;
  box-shadow: 4px 4px 14px #000;

  -moz-transform:rotate(0deg);
  -webkit-transform:rotate(0deg);
  -o-transform:rotate(0deg);
  -ms-transform:rotate(0deg);
  filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=.1);
}

.model {
  width: 30px;
  margin-top: 5px;
  margin-bottom: -25px;
  margin-left: -14px;
  margin-right: 30px;
  -moz-border-radius: 12px;
  -webkit-border-radius: 12px;
  border-radius: 12px;

  -moz-box-shadow: 4px 4px 14px #000;
  -webkit-box-shadow: 4px 4px 14px #000;
  box-shadow: 4px 4px 14px #000;

  -moz-transform:rotate(0deg);
  -webkit-transform:rotate(0deg);
  -o-transform:rotate(0deg);
  -ms-transform:rotate(03deg);
  filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=.1);
}

.calloutphone {
  width: 50px;
  margin-top: 5px;
  margin-bottom: -25px;
  margin-left: -15px;
  margin-right: 30px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;

  -moz-box-shadow: 0px 0px 0px ;
  -webkit-box-shadow: 0px 0px 0px ;
  box-shadow: 0px 0px 0px ;

  -moz-transform:rotate(0deg);
  -webkit-transform:rotate(0deg);
  -o-transform:rotate(0deg);
  -ms-transform:rotate(0deg);
  filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=.1);
}


</style>

<!--  <script src="jquery-1.9.1.min.js"></script> -->
<script src="jquery.mobile-1.3.2.min.js"></script>


<script type="text/javascript">
$(function() 
{
	$('#searchForm').submit(function () {
	    $.post('http://citifren.com/lm/hw/lm.query.php', $('#searchForm').serialize(), function (data, textStatus) {
		 $('#result').append(data);
	    });

	    return false;
	});

});

function append_chat_data(){
$('#chat_place2').append( $('<div>').load("test.show.chat.php") );
}


</script>

<script>

function clearBox(result)
{
    document.getElementById(result).innerHTML = "";
}

// --------------------------- cookie -----------------------------------------------------------
function setCookie(cname,cvalue,exdays)
{
var d = new Date();
d.setTime(d.getTime()+(exdays*24*60*60*1000));
var expires = "expires="+d.toGMTString();
document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname)
{
var name = cname + "=";
var ca = document.cookie.split(';');
for(var i=0; i<ca.length; i++) 
  {
  var c = ca[i].trim();
  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
}
return "";
}

 
function checkCookie()
{
var user=getCookie("citifren");
if (user!="")
  {
  // alert("Welcome again " + user);

  //      var aphone = document.getElementById("auth");
  //      aphone.value = "Hiaia";
  //var ganti = "Welcome";
  //$('#auth').html(ganti);
  $('#auth').load('http://citifren.com/chat/welcome.php');
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
// ---------------------------------------------------------------------------------------------

function removeWelcome()
  {
  $('#auth').html('');
  }

function setWelcome()
  {
  $('#auth').load('http://citifren.com/chat/welcome.php');
  }

</script>
  

</head>
<?php $pagebg = "#01a9db"; ?>

<body onLoad="checkCookie()" bgcolor="#dedede" style="background-image:url();
  background-color: <?php echo $pagebg; ?>;
  background-repeat: no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

<div data-role="page" id="satu" data-theme="a" >


	<div data-role="header">
	<h1><font color="#dedede"><font color=#df0101>Citi</font><font color=#a4a4a4>Fren</font></font></h1>
    	<a href="#satu" onclick="setWelcome()" data-icon="home">Home</a>
    	<a href="#dua" data-iconpos="right" data-icon="grid">></a>

	</div><!-- /header -->
						<input type="hidden" id="konfirmasi" name="konfirmasi" value="6281226544458">
        <div data-role="navbar" data-type="horizontal" data-mini="true" data-theme="b" class="navigasi">
	<ul>
            <li><a data-icon="star" data-role="button" href="http://citifren.com/chat/open.contacts.php" target="contactFrame" onClick="removeWelcome(); showcontact('contactFrame'); onkan(); loadData();" onMouseOver="OFFremoveWelcome()">Chat</a></li>
            <li><a data-icon="gear" data-role="button" href="http://citifren.com/chat/open.contacts.php" target="contactFrame" onClick="removeWelcome(); showcontact('contactFrame')" onMouseOver="removeWelcome()">Call</a></li>
            <li><a data-icon="plus" onMouseOver="removeWelcome()" data-role="button" href="#album">Albums</a></li>
	</ul>

        </div><!-- /navbar -->

<div data-role="content" style="padding:0; height:90%; width: 100%; background-color:<?php echo $pagebg; ?>; ">
<script>
function showcontact(id){
        if (document.getElementById){
            obj = document.getElementById(id);
            if (obj.style.display == "none"){
                obj.style.display = "";
            } else {
                obj.style.display = "none";
            }
        }
}
</script>
<?php //include("test.contacts.php");
        $id = $_COOKIE['citifren'];
?>
 
        <iframe id="contactFrame" name="contactFrame" style="display:none; height:100%; border: 0px; width: 90%; " src="">Form</iframe>
<?php

$cek_cookie = $_COOKIE[citifren];
if ($cek_cookie !== "08096795005")
{

//echo "Your phone number: $cek_cookie";

}

?>
<div id="auth" onClick="onkan(); loadData(); checkCookie(); offkan();" onMouseout="onkan(); loadData()" ><br><center>This is authentication page<br>Click here</center><br><br></div>


<div data-role="content"  id="chat_place"></div>

<script>

$(function()
{
        $('#chatForm').submit(function () {
            $.post('http://citifren.com/chat/chat.put.msg.doit.php', $('#chatForm').serialize(), function (data, textStatus) {
                 $('#result').append(data);
        });

        document.getElementById('chatboxe').value = "";
        document.getElementById('chatboxe').style.height = "2em";
        return false;
        add();
        });

});
</script>
<script>

function showhide(id){
        if (document.getElementById){
            obj = document.getElementById(id);
            if (obj.style.display == "none"){
                obj.style.display = "";
            } else {
                obj.style.display = "none";
            }
        }
}




function jumpTo(id){
$('html, body').animate({
scrollTop: $("#pushframetop").offset().top
}, 1500);
}


</script>

<iframe id="uploadFrame" name="uploadFrame" style="display:none; border: 0px" src="">Form</iframe>

</div>
<a href="#pushframetop" id="pushframetop"></a>

<div  data-role="footer" data-position="fixed" class="ui-bar" data-id="myfoot">

<form id="chatForm" action="">
    <input type="hidden" id="countervalue" value="0">
    <input type="hidden" id="whotochat" value="9999" name="whotochat">

    <table width=100%><tr><td data-icon="arrow-r" data-rel="dialog" data-transition="slidedown" class="ui-bar">
    <a href="http://citifren.com/chat/upload.form.file.php" target="uploadFrame" onClick="javascript:showhide('uploadFrame'); jumpTo(pushframetop);"   style="text-decoration: none" >+</a>
    </td><td style="width:100%;">
    <textarea name="chat" onClick="offkan()" onMouseover="offkan()" onMouseout="onkan(); loadData()" data-role="field-contain" style="max-height:100px" id="chatboxe"></textarea>    
    </td><td data-icon="arrow-r" data-rel="dialog" data-transition="slidedown" class="ui-bar">

    <input type=submit name=submit value=">>" class="gobutton" id="submitbutton" onMouseover="offkan()" onClick="onkan(); loadData();">
    </td></tr></table>

</div>


<script type="text/javascript">
$(function()
{
        $('#formAddData').submit(function () {
            $.post('http://citifren.com/lm/lm.put.php', $('#formAddData').serialize(), function (data, textStatus) {
                 $('#resultput').append(data);
            });

            return false;
        });

});


function add.chat.data() {
var i = document.getElementById('uploadFrame').contentWindow.document.getElementById("elementinsideiframe");;
var d = document.createElement( 'div' );
d.id = "new1";
d.innerHTML = i.innerHTML ;
var p = document.getElementById('chat_place');
p.appendChild(d);
}

function pull_chat_data_from_server() {
        function loadData() {
        $('#elementinsideiframe').load('test.show.chat.php', function() {
        if (window.reloadData != 0)
        window.clearTimeout(window.reloadData);
        window.reloadData = window.setTimeout(loadData, 500)
        }).fadeIn("slow");
        }

        window.reloadData = 0; // store timer load data on page load, which sets timeout to reload again
        loadData();
        // document.getElementById('chatboxe').style.height = "2em";

        }
</script>

<script>

function clearBoxPut(resultput)
{
    document.getElementById(resultput).innerHTML = "";
}


</script>





<script>
function loadData(whotochat) {

        // -----------------------------------------------------------
        // Fungsi ini memerlukan <input type=hidden id=countervalue
        // Untuk On dan Off, nilai countervalue harus diubah 1 atau 0
        // 1 = OFF
        // 0 = ON
        // Diaktifkan menggunakan event handler tertentu dan memanggil
        // fungsi offkan(); atau onkan(); sebelum fungsi loadData();
        // -----------------------------------------------------------


      var isoff = document.getElementById("countervalue").value;
        iso = isoff.toString();


        if(iso != 1) {
	var whotochat = $('#whotochat').val();


        $('#chat_place').load('http://citifren.com/chat/chat.show.chat.php?whotochat='+whotochat, function() {
        if (window.reloadData != 0)
        window.clearTimeout(window.reloadData);
        window.reloadData = window.setTimeout(loadData, 500);
        }).fadeIn("slow");

        }else  { window.clearTimeout(window.reloadData);  }

 	// $(".boxshadow").css({"width:":"100%"});
}

        // window.reloadData = 0; // store timer load data on page load, which sets timeout to reload again

	var whotochat = document.getElementById("whotochat").value;
      //  window.reloadData = 0;
      //  loadData(phone);


function offkan(){
var nilai = document.getElementById("countervalue");
nilai.value = 1;

}


function onkan(){
var nilai = document.getElementById("countervalue");
nilai.value = 0;
}

function setwhotochat(whotochat)
{
	var aphone = document.getElementById("whotochat");
        aphone.value = whotochat;
}

function getCookie(cname)
{
var name = cname + "=";
var ca = document.cookie.split(';');
for(var i=0; i<ca.length; i++) 
  {
  var c = ca[i].trim();
  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
  }
return "";
}


</script>
</div>





<div data-role="page" id="dua" data-theme="a">


        <div data-role="header">
        <h1><font color="#dedede"><font color=#df0101>Citi</font><font color=#a4a4a4>Fren</font></font></h1>
        <a href="#satu" data-icon="home">Home</a>
        <a href="#satu" data-iconpos="right" data-icon="grid">></a>

        </div><!-- /header -->
<center>
Your Profile goes here..!
</center>


<div  data-role="footer" data-position="fixed" class="ui-bar" data-id="myfoot">

<center>www.citifren.com</center>
</div>
</div>


</body>
</html>


