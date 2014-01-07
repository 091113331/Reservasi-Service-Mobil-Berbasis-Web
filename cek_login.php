<?php
require_once("config/koneksi.php");
if(!isset($_SESSION)){
	session_start();
}

$email = $_POST['email'];
$sandi = $_POST['sandi'];

$cek = mysql_query("select * from user where email = '$email' and sandi = '$sandi'");
if(mysql_num_rows($cek) > 0){
	while($r = mysql_fetch_array($cek)){
	//$user = $r['email'];
	$_SESSION['email']     = $r['email'];
	$_SESSION['namalengkap']  = $r['nama'];
	$_SESSION['sandi']     = $r['sandi'];
	$_SESSION['ID']    = $r['id'];
	$_SESSION['level']    = 'user';
	}
	echo "Login Berhasil";
	echo "<br/>Silahkan tunggu<br/>Anda akan dialihkan...";
	echo "<script type='text/javascript'>setTimeout('location.href=\"media.php?module=home\";',2000);</script>";
}else{
	echo "<script type='text/javascript'>alert('Login Gagal');</script>";
	echo "<script type='text/javascript'>history.go(-1);</script>";
}

?>
