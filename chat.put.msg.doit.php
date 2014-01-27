<?php

include("db.connect.php");

$TanggalIsi = date("Y-m-d");
$Menit = date("i");

$f = $_SERVER["PHP_SELF"];

$tf = str_replace("/","","$f");



// -------------------------------------------------

if($uploadfile == "yes"){
$message = "$fname";
$status2 = "1"; 
//$phone = $userphone;
$phone = $_COOKIE['citifren'];
$receiver = $whotochat;

}else{
$message = $_POST["chat"];
$phone = $_COOKIE['citifren'];
$receiver = $_POST["whotochat"]; //"08096795005";
//$receiver = $_GET["whotochat"]; 
$status2 = ""; // Harus kosong karena bukan file gambar atau video
}

$time1 = date("Y-m-d H:i:s");
$time2 = "$TanggalIsi";
$status1 = "1";
//$status2 = "";
$etc1 = "";
$etc2 = "";

#$browser = @getenv ("HTTP_USER_AGENT");
#$halaman = $_SERVER[SCRIPT_FILENAME];
#$ket = $halaman;


	$sql = "INSERT INTO fren_online (phone, time1, time2, message, receiver, status1, status2, etc1, etc2) VALUES 
 	('$phone', '$time1', '$time2', '$message', '$receiver', '$status1', '$status2', '$etc1', '$etc2')";
	$hasil = mysql_query($sql);
	if (!$hasil)
	{
	echo "ERROR".mysql_error($hasil);
	}else   {
        echo "";
        }


?>
