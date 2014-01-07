<?php
session_start();
error_reporting(0);

include "../config/koneksi.php";

        $hasil_mysql =mysql_query("INSERT INTO biaya(id,
                                            jlh_biaya,ket,id_booking)
                                    VALUES('$_POST[iduser]',
                                           '20000','booking','$_POST[idBooking]'
                                           )");
        $b =  $_POST[saldo]-20000;
        $hasil_mysql =mysql_query("UPDATE transaksi
                                    SET jlh_nominal='$b' where id='$_POST[iduser]'
                                           ");


        $hasil_mysql =mysql_query("INSERT INTO biaya(id,
                                            jlh_biaya,ket,id_booking)
                                    VALUES('$_POST[iduser]',
                                           '$_POST[jlh]','$_POST[ket]','$_POST[idBooking]'
                                           )");
        $akhir =  $_POST[saldo]-$_POST[jlh];
        $hasil_mysql =mysql_query("UPDATE transaksi
                                    SET jlh_nominal='$akhir' where id='$_POST[iduser]'
                                           ");
          if($hasil_mysql)
            {

            echo "<script>alert('Terima Kasih'); </script>";
            print("<html><head><title></title>
          <meta http-equiv='refresh' content='0; URL=../media.php?module=booking'></head><body></body></html>");

            }
          else
          {
            echo "<script>alert('Maaf Proses Gagal!!!'); ";
            print("<html><head><title>a</title>
          <meta http-equiv='refresh' content='0; URL=../media.php?module=booking'></head><body></body></html>");

          }




?>
