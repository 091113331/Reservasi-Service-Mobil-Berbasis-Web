<?php
error_reporting(0);
require_once("../config/koneksi.php");
$email = $_POST['email'];
$sandi = $_POST['sandi'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$nama = $_POST['nama'];

$hasil_mysql =mysql_query("INSERT INTO `user` (`id`, `nama`, `alamat`, `kelamin`, `email`, `sandi`, `status`, `level`) VALUES (NULL, '$nama', '$alamat', '$jk', '$email', '$sandi', 'aktif', 'user')");

  if($hasil_mysql)
    header('location:../media.php?module=hasil');
  else
    header('location:../media.php?module=gagal');

?>
