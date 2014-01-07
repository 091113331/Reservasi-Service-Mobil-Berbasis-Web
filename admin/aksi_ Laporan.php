<?php
session_start();
if (empty($_SESSION['namalengkap']) AND empty($_SESSION['sandi'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../config/koneksi.php";
include "../../config/fungsi_thumb.php";

$module=$_GET[module];
$act=$_GET[act];
;
// Hapus gejala
if ($module=='Laporan' AND $act=='harian'){
    

  mysql_query("DELETE FROM booking WHERE id_booking='$_GET[id]'");
  header('location:../media.php?module=harian');
}


// Update gejala
elseif ($module=='Laporan' AND $act=='bulanan'){
  mysql_query("DELETE FROM booking WHERE id_booking='$_GET[id]'");
  header('location:../media.php?module=bulanan');
 
}
elseif ($module=='Laporan' AND $act=='tahunan'){
    mysql_query("DELETE FROM booking WHERE id_booking='$_GET[id]'");
    header('location:../media.php?module=tahunan');

}
}
?>
