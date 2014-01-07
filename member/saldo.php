<?php
  error_reporting(0);

session_start();

?>

<?php

    echo "

        <h2>Tambah Saldo</h2>
                          <br><br>
                <form name='daftar' action='member/aksi_saldo.php' method='POST' enctype='multipart/form-data'>
                    <table>
                    <tr>
                        <td><label>Jumlah Nominal</label></td>
                        <td> :</td>
                        <td><input type='text' name='nominal' /></td>

                    </tr>
                    <tr>
                        <td><label>Tgl. Transfer</label></td>
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
                        <td><label>Pesan Anda</label></td>
                        <td> :</td>
                        <td><textarea name='pesan' rows='4' cols='20'>
                            </textarea></td>
                    </tr>
                    <tr>
                        <td><label>Bukti Transfer</label></td>
                        <td> :</td>
                        <td><input type=file name='fupload'  size='40' style='width:400px;'>
                            <br>**Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td>
                    </tr>
                    </table>
                    <br><br>
                    <input type='submit' name ='simpan' value='Simpan' />

                </form>

       ";



?>
