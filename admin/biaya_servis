<?php
  error_reporting(0);

session_start();
include "../config/koneksi.php";
?>

<?php
switch($_GET[act]){

  default:
        echo "

        <h2>Biaya Servis</h2>

            <br><br>
                <form name='biaya' action='?module=hitBiaya&act=tampil' method='POST'>
                    <table>
                    <tr>
                        <td><label>Id. Booking</label></td>
                        <td> :</td>
                        <td><input type='text' name='idBooking' /><input type='submit' value='cari'
                        ></td>
                        

                    </tr>
                    </form>
                    <tr>
                        <td><label>Nama</label></td>
                        <td> :</td>
                        <td><input type='text' name='nama' /></td>

                    </tr>
                    <tr>
                        <td><label>No. Polisi</label></td>
                        <td> :</td>
                        <td><input type='text' name='nopol' /></td>

                    </tr>
                    <tr>
                        <td><label>Saldo</label></td>
                        <td> :</td>
                        <td><input type='text' name='saldo' /></td>

                    </tr>
                    <tr>
                        <td><label>Jlh. Biaya</label></td>
                        <td> :</td>
                        <td><input type='text' name='jlh' /></td>

                    </tr>

                    <tr>
                        <td><label>Keterangan</label></td>
                        <td> :</td>
                        <td><textarea name='ket' rows='4' cols='20'>
                            </textarea></td>
                    </tr>

                    </table>
                    <br><br>
                    <input type='submit' name ='simpan' value='Simpan' />

                

       ";

        break;
    case "tampil":
            
                    

            echo "

        <h2>Biaya Servis</h2>
         ";
            $total=0;
            $tampil=mysql_query("SELECT u.nama,b.nopol,b.id_booking,u.id FROM booking b inner join user u  on b.id=u.id
                                where b.id_booking='$_POST[idBooking]'");

                while ($r=mysql_fetch_array($tampil)){
            echo"
            <br><br>
                <form name='biaya' action='admin/aksiBiaya.php' method='POST'>
                    <table>
                    <tr>
                        <td><label>Id. Booking</label><input type='hidden' name='iduser' value='$r[3]' /></td>
                        <td> :</td>
                        <td><input type='text' name='idBooking' value='$r[2]'/><input type=button value='cari'
                        onclick=\"window.location.href='?module=hitBiaya&act=tampil';\"></td>


                    </tr>
                    <tr>
                        <td><label>Nama</label></td>
                        <td> :</td>
                        <td><input type='text' name='nama' value='$r[0]' /></td>

                    </tr>
                    <tr>
                        <td><label>No. Polisi</label></td>
                        <td> :</td>
                        <td><input type='text' name='nopol'value='$r[1]' /></td>

                    </tr>
                    <tr>
                        <td><label>Saldo</label></td>
                        <td> :</td>
                        ";
                        
                        $tampil2=mysql_query("SELECT jlh_nominal FROM transaksi where id='".$r[3]."'");
                        while ($r1=mysql_fetch_array($tampil2)){
                            $total=$total+$r1[0];
                        }
                echo "
                        <td><input type='text' name='saldo'value='$total' /></td>

                    </tr>
                    <tr>
                        <td><label>Jlh. Biaya</label></td>
                        <td> :</td>
                        <td><input type='text' name='jlh' /></td>

                    </tr>

                    <tr>
                        <td><label>Keterangan</label></td>
                        <td> :</td>
                        <td><textarea name='ket' rows='4' cols='20'>
                            </textarea></td>
                    </tr>

                    </table>
                    <br><br>
                    <input type='submit' name ='simpan' value='Simpan' />

                </form>

                ";
         }
            break;
   }
?>
