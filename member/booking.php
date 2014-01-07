<?php
  error_reporting(0);

session_start();

?>

<?php
echo "

        <h2>Booking Servis</h2>
                          <br><br>
                <p id='kontak' style='margin:0 auto;'>Informasi: <br>
                    Biaya Service sebenarnya belum dipotongkan ke Saldo Anda.<br>
                    Semua biaya service akan dihitung langsung di tempat, setelah service selesai
                    <br><br>
                    Biaya booking servis ini adalah Rp. 20.000,'
                </p>
            <br><br>
                <form name='daftar' action='member/aksiBooking.php' method='POST'enctype='multipart/form-data'>
                    <table>
                    <tr>
                        <td><label>No. Polisi</label></td>
                        <td> :</td>
                        <td><input type='text' name='nopol' /></td>

                    </tr>
                    <tr>
                        <td><label>Tgl. Booking</label></td>
                        <td> :</td>

                       ";
                        ?>
               <?php
               echo"
                        <td><select name='tgl'style='width:70px;'>
                           ";
                       for ($i=1;$i<=31;$i++)
                        {
                            echo"<option>$i</option>";
                        }
                              echo"</select>";

                        ?>
                        <?php
               echo"
                        <select name='bln' style='width:150px;'>
                           ";
                      
                            echo"<option>Januari</option>";
                            echo"<option>Pebruari</option>";
                            echo"<option>Maret</option>";
                            echo"<option>April</option>";
                            echo"<option>Mei</option>";
                            echo"<option>Juni</option>";
                            echo"<option>Juli</option>";
                            echo"<option>Agustus</option>";
                            echo"<option>September</option>";
                            echo"<option>Oktober</option>";
                            echo"<option>Nopember</option>";
                            echo"<option>Desember</option>";
                        
                              echo"</select>";

                        ?>
                        <?php
               echo"
                        <select name='thn'  style='width:100px;'>
                           ";
                       for ($i=2013;$i<=2017;$i++)
                        {
                            echo"<option>$i</option>";
                        }
                              echo"</select></td>";

                        ?>
               <?php
               echo"
                    </tr>
                    <tr>
                        <td><label>Jam Service</label></td>
                        <td> :</td>
                        ";
                        ?>
               <?php
               echo"
                        <td><select name='jam'>
                           ";
                       for ($i=8;$i<21;$i++)
                        {
                            echo"<option>$i.00 Wib </option>";
                        }
                              echo"</select></td>";
                ?>
              <?php
               echo"
                    </tr>

                    <tr>
                        <td><label>Pesan Anda</label></td>
                        <td> :</td>
                        <td><textarea name='pesan' rows='4' cols='20'>
                            </textarea></td>
                    </tr>
                    
                    </table>
                    <br><br>
                    <input type='submit' name ='simpan' value='Simpan' />

                </form>

       ";

?>
