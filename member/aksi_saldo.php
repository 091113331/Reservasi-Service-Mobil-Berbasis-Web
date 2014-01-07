<?php
session_start();
error_reporting(0);

include "../config/koneksi.php";
include "../config/fungsi_thumb_1.php";

  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file;
 if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=saldo)</script>";
    }
    else{
    UploadImage($nama_file_unik);

        $hasil_mysql =mysql_query("INSERT INTO transaksi(id,
                                            jlh_nominal,tgl,bln,thn,pesan,bukti)
                                    VALUES('$_SESSION[ID]',
                                           '$_POST[nominal]','$_POST[tgl]','$_POST[bln]','$_POST[thn]',
                                           '$_POST[pesan]',
                                           '$nama_file_unik'
                                           )");

        $hasil_mysql =mysql_query("INSERT INTO transaksiBackUp(id,
                                            jlh_nominal,tgl,bln,thn,pesan,bukti)
                                    VALUES('$_SESSION[ID]',
                                           '$_POST[nominal]','$_POST[tgl]','$_POST[bln]','$_POST[thn]',
                                           '$_POST[pesan]',
                                           '$nama_file_unik'
                                           )");

        $tampil=mysql_query("SELECT jlh_nominal FROM transaksi where id='".$_SESSION[ID]."'");
        while ($r=mysql_fetch_array($tampil)){

            
            if(!empty($r[0]))
                {
                $a= $r[0]+$_POST[nominal];
                echo $a;
                $hasil =mysql_query("UPDATE transaksi
                                    SET jlh_nominal='$a' ,bukti='$nama_file_unik' where id='$_SESSION[ID]'
                                           ");

                    }
            }
        
          if($hasil_mysql)
            {

            echo "<script>alert('Terima Kasih, Saldo Anda telah kami debet'); </script>";
            print("<html><head><title>Data Siswa</title>
          <meta http-equiv='refresh' content='0; URL=../media.php?module=booking'></head><body></body></html>");

            }
          else
          {
            echo "<script>alert('Maaf Transakasi Gagal!!!'); ";
            print("<html><head><title>Data Siswa</title>
          <meta http-equiv='refresh' content='0; URL=../media.php?module=saldo'></head><body></body></html>");


          }
        }
    }
    else {
        echo "<script>alert('Maaf  Gagal!!!'); </script>";
            print("<html><head><title>Data Siswa</title>
          <meta http-equiv='refresh' content='0; URL=../media.php?module=saldo'></head><body></body></html>");

    }

?>
