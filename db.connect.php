<?
// ================  KONEKSI DATABASE START ==================

$localhost = "localhost";

$db = mysql_connect("$localhost", "root", "gfr9vq3x") or die(mysql_error());
$connect = mysql_select_db("fren",$db);
if($connect)
{
//echo "SUkses koneksi database<br>";
}else { echo "ERROR: koneksi db gagal !\n"; }
?>
