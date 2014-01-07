<?php
require_once("../config/koneksi.php");
if(!isset($_SESSION)){
	session_start();
}
  error_reporting(0);
  session_start();

//  session_register("namalengkap");
//  session_register("sandi");
//  session_register("ID");
//  session_register("level");


function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$user = $_POST['user'];
$pass = $_POST['pass'];
$login=mysql_query("SELECT * FROM admin WHERE user='$user' AND pass='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){



  $_SESSION['namalengkap']  = $r['user'];
  $_SESSION['sandi']     = $r['pass'];
  $_SESSION['ID']    = $r['id'];
  $_SESSION['level']    = 'admin';

  header('location:../media.php?module=home');
}
else{
  echo "<link href=../config/adminstyle.css rel=stylesheet type=text/css>";
  echo "<center>LOGIN GAGAL! <br>
        Username atau Password Anda tidak benar.<br>
        Atau account Anda sedang diblokir.<br>";
  echo "<a href=../media.php?module=loginAdmin><b>ULANGI LAGI</b></a></center>";
}
?>
