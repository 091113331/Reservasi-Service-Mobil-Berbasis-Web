<?php
  error_reporting(0);

session_start();

?>

<?php
echo "

        <h2>Laporan Transaksi Anda</h2>
                          <br><br>
                <p><b>Laporan Transaksi Anda</b>";
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
            $tampil=mysql_query("SELECT b.tgl,b.bln,b.thn,x.jlh_biaya,x.ket FROM biaya x left join booking b on x.id_booking=b.id_booking where b.id='$_SESSION[ID]'and b.thn='2013'");


            echo"
            </p>
               
            <br><br>
                <table border='1' width='500px'style='margin:0 auto; '>
                  <thead>
                    <tr>
                        <th>Tgl. Servis</th>
                        <th>Biaya</th>
                        <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                  ";
              while ($r=mysql_fetch_array($tampil)){
              echo"
                    <tr>
                        <td>$r[0]-$r[1]-$r[2]</td>
                        <td>$r[3]</td>
                        <td>$r[4]</td>
                    </tr>
                    ";
              }
              echo"
                  </tbody>
               </table>


       ";

?>
