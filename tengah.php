<?php
session_start();
$act=$_GET [Id];
if ($_GET[module]=='home'){
    echo "
        <img src='foto_produk/mobil1.jpg'width='497px' height='304px ' border='0'>



                <p>Selamat Datang di Bengkel Hery Jaya Motor,  Kami menyediakan genuine spare part
                untuk mobil. Untuk melengkapi jajaran produk, kami juga
                menyediakan spare part merk lain dengan kualitas terbaik yang telah banyak digunakan oleh pengendara
                mobil di Indonesia sebagai subtitusi produk genuine spare part.
                Beberapa kategori produk belum tersedia dikarenakan kami masih dalam
                proses mengirim data dari gudang ke database kami, silahkan kontak kami di
                reservasi@heryjaya.biz  untuk pemesanan kategori produk yang belum ditampilkan di
                pkm.com.</p>
				<p>“Kami selalu mengutamakan pelayanan yang baik dan memuaskan bagi para pelanggan.
				Kami juga melakukan pelayanan jemput mobil di rumah atau kantor,” Semua pelayanan  mendapatkan garansi.
                <p> Selamat Bergabung !!!</p>
       ";

}
elseif ($_GET[module]=='tampilBerita'){

    $tampil=mysql_query("SELECT * FROM berita ORDER BY idBerita DESC");
    $no=0;
    while ($r=mysql_fetch_array($tampil)){


    echo"
            <h4><a href='media.php?module=tampilBerita2&Id=$r[idBerita]' style='text-decoration: none;color: black;'>$r[judul]</h4></a><hr>
<p>
<span>

        <img src='foto_produk/small_$r[gambar]'/>


        $r[desk] ...<a href='media.php?module=tampilBerita2&Id=$r[idBerita]'>baca</a>
        <br><br><br><br></span></p>
    ";
    }
}
elseif ($_GET[module]=='tampilBerita2'){

    $tampil=mysql_query("SELECT * FROM berita WHERE idBerita= '$act'");

    echo "<h2>Berita </h2><hr>";
    while ($r=mysql_fetch_array($tampil)){


    echo"
            <h4>$r[judul]</h4><hr>
<span>
		<img src='foto_produk/$r[gambar]'>
        $r[isi] </span>

    ";
    }
}
elseif ($_GET[module]=='tampilInfo'){
    $tampil=mysql_query("SELECT * FROM info ORDER BY idInfo DESC");
    $no=0;
    echo "<h2>Informasi</h2>";
    while ($r=mysql_fetch_array($tampil)){


    echo"
            <h4>$r[judul]</h4><hr>
<p><span>
		$r[desk] ...<a href='media.php?module=tampilInfo2&Id=$r[idInfo]'>baca</a> </span></p>

    ";
    }

}
elseif ($_GET[module]=='tampilInfo2'){
    $tampil=mysql_query("SELECT * FROM info WHERE idInfo='$act'");
    $no=0;
    echo "<h2>Informasi</h2>";
    while ($r=mysql_fetch_array($tampil)){


    echo"
            <h4>$r[judul]</h4><hr>
<p><span>
		$r[isi] </span></p>

    ";
    }

}
elseif ($_GET[module]=='ketentuan'){
    echo "
        <h2>Ketentuan Servis</h2>
                <img src='images/symbol.jpg'width='97px' height='104px ' border='0'>
                <table border=1px>
                <tr><td width='10'><p>1</p></td><td>
                <p>Melakukan Pendaftaran dengan memasukkan Data-data yang diperlukan, pada menu pendaftaran di atas selanjutnya
                    isi kan form dengan baik dan benar.</p>
                    </td></tr>
                    <tr><td width='10'><p>2</p></td><td>
                    <p>Setelah melakukan pendaftaran dan dinyatakan telah bergabung, maka anda  login sebagai member.</p>
                    </td></tr>
                    <tr><td width='10'><p>3</p></td><td>
                    <p>Pada halaman member ada beberapa menu sesuai fasilitas yang disediakan. Pertama-tama anda harus
                    Tambah saldo untuk pendebetan transaksi anda sewaktu melakukan servis. Tambah Saldo dapat
                    dilakukan dengan mengisi Form Tambah saldo dan mencantumkan Bukti transaksi andadi Form tersebut.
                    Agar transaksi anda dapat kami proses selanjutnya.</p>
                    </td></tr>
                    </table>
";
}
elseif ($_GET[module]=='kontak'){
    $aksi="admin/mod_Member/aksi_Member.php";
    echo "

        <h2>Kontak Kami</h2>

                <p id='kontak'>Email : reservasi@heryjayamotor.biz <br>
                    Tel. 061 - 000000 <br>
                    Hp : 081111111
                    Fax : 061 - 0000100
                    <br><br>
                    Atau isi Form dibawah ini.
                </p>
           <div id='pesankontak'>
                <br><br>
                <form name='pesan' method='POST'action='$aksi?module=member&act=input'>
                    <table>
                    <tr>
                        <td><label>Nama Anda</label></td>
                        <td> :</td>
                        <td><input type='text' name='nama' /></td>

                    </tr>
                    <tr>
                        <td><label>Email Anda</label></td>
                        <td> :</td>
                        <td><input type='text' name='email' /></td>
                    </tr>
                    <tr>
                        <td><label>Telp.</label></td>
                        <td> :</td>
                        <td><input type='text' name='telp' /></td>
                    </tr>
                    <tr>
                        <td><label>Tgl. Kontak</label></td>
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

                        ";
                        ?>

              <?php
               echo"

                    <tr>
                        <td><label>Pesan Anda</label></td>
                        <td> :</td>
                        <td><textarea name='pesan' rows='4' cols='20'>
                            </textarea></td>
                    </tr>
                    </table>
                    <input type='submit' value='Kirim' />

                </form>


         </div>



       ";
}
elseif ($_GET[module]=='login'){
    echo "

        <h2>Halaman Login Member</h2>


           <div id='pesankontak'>
                <br><br>
                <form name='login' action='cek_login.php' method='POST'>
                    <table>
                    <tr>
                        <td><label>Email</label></td>
                        <td> :</td>
                        <td><input type='text' name='email' /></td>

                    </tr>
                    <tr>
                        <td><label>Sandi</label></td>
                        <td> :</td>
                        <td><input type='Password' name='sandi' /></td>
                    </tr>

                    </table>
                    <input type='submit' value='Login' />

                </form>


         </div>



       ";
}
elseif ($_GET[module]=='daftar'){
    include "aksi/daftar.php";
}
elseif ($_GET[module]=='hasil'||$_GET[module]=='gagal'){
    //if($_GET[module]=='hasil')
        include "aksi/hasilDaftar.php";
   // else
       // include "aksi/hasilDaftar.php?module=gagal";
}
elseif ($_GET[module]=='saldo'){
    include "member/saldo.php";
}
elseif ($_GET[module]=='booking'){
    include "member/booking.php";
}
elseif ($_GET[module]=='member'){


echo "<h2>Data Member</h2>

          <table style='width:650px;margin:0 auto;'>
          <tr><th>Nama</th><th>Email</th><th>Status</th><th>Aksi</th></tr>";
    $tampil=mysql_query("SELECT * FROM user ORDER BY id DESC");
    $no=0;
    $aksi="admin/mod_Member/aksi_Member.php";
    while ($r=mysql_fetch_array($tampil)){

       echo "<tr><td>$r[nama]</td>
             <td>$r[email]</td>
             <td>$r[status] </td>
             <td><a href='$aksi?module=member&act=update&id=$r[id]'>blok</a> |
                   <a href='$aksi?module=member&act=hapus&id=$r[id]'>Hapus</a>

             </td></tr>";

    }
    echo "</table>";
}
elseif ($_GET[module]=='tampilkontak'){


echo "<h2>Laporan Kontak</h2>

          <table style='width:650px;margin:0 auto;'>
          <tr><th>Email</th><th>Tgl Kontak</th><th>Pesan</th><th>Aksi</th></tr>";
    $tampil=mysql_query("SELECT * FROM pesan ORDER BY idPesan DESC");
    $no=0;
    $aksi="admin/mod_Member/aksi_Member.php";
    while ($r=mysql_fetch_array($tampil)){

       echo "<tr><td>$r[email]</td>
             <td>$r[tgl]$r[bln]$r[thn]</td>
             <td>$r[pesan] </td>
             <td>
                   <a href='$aksi?module=member&act=hapus1&id=$r[idPesan]'>Hapus</a>

             </td></tr>";

    }
    echo "</table>";
}
elseif ($_GET[module]=='tranSaya'){
    include "member/LapTransaksi.php";
}
elseif ($_GET[module]=='hitBiaya'){
    include "admin/biaya_servis.php";
}
elseif ($_GET[module]=='berita'){
    include "admin/mod_Berita/berita.php";
}
elseif ($_GET[module]=='Info'){
    include "admin/mod_Info/Info.php";
}
elseif ($_GET[module]=='Ketentuan'){
    include "admin/mod_Ketentuan/Ketentuan.php";
}
elseif ($_GET[module]=='Sponsor'){
    include "admin/mod_Sponsor/Sponsor.php";
}
elseif ($_GET[module]=='konfirmasi'){
    echo "<h2>Data Konfirmasi</h2>

          <table style='width:650px;margin:0 auto;'>
          <tr><th>Email</th><th>Tgl Konfirmasi</th><th>Bukti Transfer</th></tr>";
    $tanggal=$_GET[t];
    $tampil=mysql_query("SELECT u.email,t.tgl,t.bln,t.thn,t.bukti FROM transaksi t left join user u on t.id=u.id  ");
    $no=0;
    $aksi="admin/mod_Member/aksi_Member.php";
    while ($r=mysql_fetch_array($tampil)){

       echo "<tr><td>$r[0]</td>
             <td>$r[1]$r[2]$r[3]</td>

             <td><img src='foto_produk/small_$r[4]'></td>
             </tr>

            ";

    }
        echo"<tr><td>";
        if (!empty($tampil)){
                 echo"Pilih Laporan pertanggal";
             }
    echo " </td></tr></table>";

}
elseif ($_GET[module]=='harian'){
    echo "<h2>Laporan Harian</h2>
            <span style='width:650px;margin-left:50px;'>Laporan Data Servis Harian";

               echo"
                        <form method=POST enctype='multipart/form-data' action='media.php?module=harian'style='margin-left:40px;'>
                        <select name='tgl'style='width:70px;'>
                           ";
                       for ($i=1;$i<=31;$i++)
                        {
                            echo"<option >$i</option>";
                        }
                              echo"</select>";



               echo"
                        <select name='bln' style='width:150px;'>
                           ";

                            echo"<option value='Januari'>Januari</option>";
                            echo"<option value='Pebruari'>Pebruari</option>";
                            echo"<option value='Maret'>Maret</option>";
                            echo"<option value='April'>April</option>";
                            echo"<option value='Mei'>Mei</option>";
                            echo"<option value='Juni'>Juni</option>";
                            echo"<option value='Juli'>Juli</option>";
                            echo"<option value='Agustus'>Agustus</option>";
                            echo"<option value='September'>September</option>";
                            echo"<option value='Oktober'>Oktober</option>";
                            echo"<option value='Nopember'>Nopember</option>";
                            echo"<option value='Desember'>Desember</option>";

                              echo"</select>";



               echo"
                        <select name='thn'  style='width:100px;'>
                           ";
                       for ($j=2013;$j<=2017;$j++)
                        {
                            echo"<option>$j</option>";
                        }
                        echo"</select> <input type='submit' value='tampilkan' />";


                 echo"
                 </form>
            </span>
          <table style='width:650px;margin:0 auto;'>
          <tr><th>Email</th><th>Tgl Servis</th><th>Biaya</th></tr>";
    $tanggal=$_GET[t];
    $tampil=mysql_query("SELECT u.email,b.tgl,b.bln,b.thn,a.jlh_biaya,b.id_booking FROM booking b left join user u on b.id=u.id left join biaya a on u.id=a.id where b.tgl='$_POST[tgl]'and b.bln='$_POST[bln]'and  b.thn='$_POST[thn]' ");
    $no=0;
    $aksi="admin/aksi_Laporan.php";
    while ($r=mysql_fetch_array($tampil)){

       echo "<tr><td>$r[0]</td>
             <td>$r[1]$r[2]$r[3]</td>
             <td>$r[4]</td>


             </td>
             </tr>

            ";
         //<td><a href='$aksi?module=Laporan&act=harian&id=$r[5]'>Hapus</a>
    }
        echo"<tr><td>";
        if (!empty($tampil)){
                 echo"Pilih Laporan pertanggal";
             }
    echo " </td></tr></table>";

}
elseif ($_GET[module]=='bulanan'){
    echo "<h2>Laporan Bulanan</h2>
            <span style='width:650px;margin-left:50px;'>Laporan Data Servis Bulanan";

               echo"
                        <form method=POST enctype='multipart/form-data' action='media.php?module=bulanan'style='margin-left:40px;'>
                        ";

               echo"
                        <select name='bln' style='width:150px;'>
                           ";

                            echo"<option value='Januari'>Januari</option>";
                            echo"<option value='Pebruari'>Pebruari</option>";
                            echo"<option value='Maret'>Maret</option>";
                            echo"<option value='April'>April</option>";
                            echo"<option value='Mei'>Mei</option>";
                            echo"<option value='Juni'>Juni</option>";
                            echo"<option value='Juli'>Juli</option>";
                            echo"<option value='Agustus'>Agustus</option>";
                            echo"<option value='September'>September</option>";
                            echo"<option value='Oktober'>Oktober</option>";
                            echo"<option value='Nopember'>Nopember</option>";
                            echo"<option value='Desember'>Desember</option>";

                              echo"</select>";



               echo"
                        <select name='thn'  style='width:100px;'>
                           ";
                       for ($j=2013;$j<=2017;$j++)
                        {
                            echo"<option>$j</option>";
                        }
                        echo"</select> <input type='submit' value='tampilkan' />";


                 echo"
                 </form>
            </span>
          <table style='width:650px;margin:0 auto;'>
          <tr><th>Email</th><th>Tgl Servis</th><th>Biaya</th></tr>";
    $tanggal=$_GET[t];
    $tampil=mysql_query("SELECT u.email,b.tgl,b.bln,b.thn,a.jlh_biaya,b.id_booking FROM booking b left join user u on b.id=u.id left join biaya a on u.id=a.id where  b.bln='$_POST[bln]'and  b.thn='$_POST[thn]' ");
    $no=0;
    $aksi="admin/aksi_Laporan.php";
    while ($r=mysql_fetch_array($tampil)){

       echo "<tr><td>$r[0]</td>
             <td>$r[1]$r[2]$r[3]</td>
             <td>$r[4]</td>


             </td>
             </tr>

            ";
//<td><a href='$aksi?module=Laporan&act=bulanan&id=$r[5]'>Hapus</a>
    }
        echo"<tr><td>";
        if (!empty($tampil)){
                 echo"Pilih Laporan perbulan";
             }
    echo " </td></tr></table>";

}
elseif ($_GET[module]=='tahunan'){
    echo "<h2>Laporan Tahunan</h2>
            <span style='width:650px;margin-left:50px;'>Laporan Data Servis Tahunan";

               echo"
                        <form method=POST enctype='multipart/form-data' action='media.php?module=tahunan'style='margin-left:40px;'>
                        ";


               echo"
                        <select name='thn'  style='width:100px;'>
                           ";
                       for ($j=2013;$j<=2017;$j++)
                        {
                            echo"<option>$j</option>";
                        }
                        echo"</select> <input type='submit' value='tampilkan' />";


                 echo"
                 </form>
            </span>
          <table style='width:650px;margin:0 auto;'>
          <tr><th>Email</th><th>Tgl Servis</th><th>Biaya</th></tr>";
    $tanggal=$_GET[t];
    $tampil=mysql_query("SELECT u.email,b.tgl,b.bln,b.thn,a.jlh_biaya,b.id_booking FROM booking b left join user u on b.id=u.id left join biaya a on u.id=a.id where   b.thn='$_POST[thn]'  ");
    $no=0;
    $aksi="admin/aksi_Laporan.php";
    while ($r=mysql_fetch_array($tampil)){

       echo "<tr><td>$r[0]</td>
             <td>$r[1]$r[2]$r[3]</td>
             <td>$r[4]</td>


             </td>
             </tr>

            ";
//<td><a href='$aksi?module=Laporan&act=tahunan&id=$r[5]'>Hapus</a>
    }
        echo"<tr><td>";
        if (!empty($tampil)){
                 echo"Pilih Laporan pertahun";
             }
    echo " </td></tr></table>";

}
elseif ($_GET[module]=='loginAdmin'){
    session_start();
    session_destroy();
    echo "

        <h2>Halaman Login Admin</h2>


           <div id='pesankontak'>
                <br><br>
                <form name='login' action='admin/cek_login.php' method='POST'>
                    <table>
                    <tr>
                        <td><label>Username</label></td>
                        <td> :</td>
                        <td><input type='text' name='user' /></td>

                    </tr>
                    <tr>
                        <td><label>Pass</label></td>
                        <td> :</td>
                        <td><input type='password' name='pass' /></td>
                    </tr>

                    </table>
                    <input type='submit' value='Login' />

                </form>


         </div>



       ";
}
?>






