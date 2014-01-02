<?php 
include("MobileDetect.php");

$detect = new Mobile_Detect;
if($detect->isMobile())
{
include("index.app.php"); //document.getElementById(result).innerHTML = "";
}else
{

?>
<style>

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

  -moz-transform:rotate(-0deg);
  -webkit-transform:rotate(-0deg);
  -o-transform:rotate(-0deg);
  -ms-transform:rotate(-0deg);
  filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=.1);
}
</style>
<body style="background-image:url('')">
<center>
<table style="width:1200px">
<tr>
	<td style="width:25%">

	&nbsp;&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

	</td>

	<td style="width:100%">
	<iframe style="width:400px; min-height:700px;" src="index.app.php"></iframe>
	</td>

</tr>
</table>

<?php
}
?>
