<?php
  //error_reporting(0);
if(!isset($_SESSION)){
session_start();
}

include "config/koneksi.php";
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}
echo "1";
$email = antiinjection($_POST['email']);
//$pass     = antiinjection(md5($_POST['password']));
$pass     = antiinjection(($_POST['sandi']));
$login=mysql_query("SELECT * FROM user WHERE email='$email' AND sandi='$pass' ");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);
echo "2";
// Apabila username dan password ditemukan
if ($ketemu > 0){

  echo "3";
//  session_register("email");
//  session_register("namalengkap");
//  session_register("sandi");
//  session_register("ID");
//  session_register("level");

  $_SESSION[email]     = $r[email];
  $_SESSION[namalengkap]  = $r[nama];
  $_SESSION[sandi]     = $r[sandi];
  $_SESSION[ID]    = $r[id];
  $_SESSION[level]    = 'user';
  echo "4";
  header('location:media.php?module=home');
 // print("<html><head><title>Data Sponsor</title>
  //       <meta http-equiv='refresh' content='0; URL=media.php?module=home'></head><body></body></html>");

}
else{
    echo "5";
  echo "<link href=../config/adminstyle.css rel=stylesheet type=text/css>";
  echo "<center>LOGIN GAGAL! <br>
        Username atau Password Anda tidak benar.<br>
        Atau account Anda sedang diblokir.<br>";
  echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
}
?>
