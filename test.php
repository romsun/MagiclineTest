<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title></title>
  
  
  <link rel="stylesheet" href="jquery.mobile-1.3.1.min.css">

  <link rel="stylesheet" href="jqm.css">
  
  <script type="text/javascript" src="jq203.min.js"> </script>
  <script type="text/javascript" src="index.js"> </script>

  <!-- jQuery and jQuery Mobile -->

<!--  <script src="jquery-1.9.1.min.js"></script> -->
<script src="jquery.mobile-1.3.2.min.js"></script>

<?php ?>
<body>

<a href="javaScript:openPopUp();">Halo</a>
<form action="actionName">
<div id="divId" style="display:none;">
UsreName:<input type="text" name="userName"/>
</div>
</form>

<script>
function openPopUp()
{
  $('#divId').css('display','block');
$('#divId').dialog();
}
</script>

<?php ?>
