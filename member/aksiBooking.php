<?php
session_start();
error_reporting(0);

include "../config/koneksi.php";


        $hasil_mysql =mysql_query("INSERT INTO booking(id,
                                            nopol,tgl,bln,thn,pesan,jam_servis)
                                    VALUES('$_SESSION[ID]',
                                           '$_POST[nopol]','$_POST[tgl]','$_POST[bln]','$_POST[thn]',
                                           '$_POST[pesan]',
                                           '$_POST[jam]'
                                           )");

           $tampil=mysql_query("SELECT id_booking FROM booking ORDER BY id_booking DESC");

        $r=mysql_fetch_array($tampil);
                       
          if($hasil_mysql)
            {

            echo "<script>alert('Terima Kasih, Nomor ID Booking Anda adalah $r[0]'); </script>";
            print("<html><head><title></title>
          <meta http-equiv='refresh' content='0; URL=../media.php?module=booking'></head><body></body></html>");

            }
          else
          {
            echo "<script>alert('Maaf Booking Gagal!!!'); ";
            print("<html><head><title>a</title>
          <meta http-equiv='refresh' content='0; URL=../media.php?module=booking'></head><body></body></html>");

          }
         
       
    

?>
