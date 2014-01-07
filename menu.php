<?php

if ($_SESSION['level']=='user'){
echo "

    <ul>
               <li><a href='logout.php'>Keluar</a></li>
               <li><a href='media.php?module=tranSaya'>Transaksi Saya</a></li>
                <li><a href='media.php?module=booking'>Booking Servis</a></li>
                <li><a href='media.php?module=saldo'>Tambah Saldo</a></li>
                <li><a href='media.php?module=home'>Beranda</a></li>
               <!-- <li class='active'><a href='media.php?module=Home'>Beranda</a></li> -->
                </ul>

";
}
else if ($_SESSION['level']=='admin'){

    echo "

    <ul>
                <li><a href='media.php?module=home'>Beranda</a></li>
               <li><a href=''>Edit Konten</a>
                    <ul>
                        <li><a href='media.php?module=berita'>Berita</a></li>
                        <li><a href='media.php?module=Info'>Informasi</a></li>

                        <li><a href='media.php?module=Sponsor'>Sponsor</a></li>
                    </ul>
                </li>
                <li><a href=''> Member</a>
                    <ul>
                        <li><a href='media.php?module=member'>Lihat Member</a></li>

                    </ul>
                </li>
                <li><a href=''>Laporan</a>
                    <ul>
                        <li><a href='media.php?module=tampilkontak'>Kontak</a></li>
                        <li><a href='media.php?module=harian'>Harian</a></li>
                        <li><a href='media.php?module=bulanan'>Bulanan</a></li>
                        <li><a href='media.php?module=tahunan'>Tahunan</a></li>
                    </ul>
                </li>
                <li><a href=''>Transaksi</a>
                    <ul>
                        <li><a href='media.php?module=konfirmasi'>Lihat Konfirmasi</a></li>
                        <li><a href='media.php?module=hitBiaya'>Hitung Biaya</a></li>
                    </ul>
                </li>
                <li><a href='logout.php'>Loguot</a></li>


       </ul>

";
}
else
{
    echo "

    <ul>
    			<li><a href='media.php?module=home'>Beranda</a></li>
               <li><a href='media.php?module=daftar'>Pendaftaran</a></li>
               <li><a href='media.php?module=login'>Login</a></li>
                <li><a href='media.php?module=kontak'>Kontak Kami</a></li>
                <li><a href='media.php?module=ketentuan'> Ketentuan Servis</a></li>
                <li><a href='media.php?module=tampilInfo'>Informasi</a></li>
                <li><a href='media.php?module=tampilBerita'>Berita</a></li>
               <!-- <li class='active'><a href='media.php?module=Home'>Beranda</a></li> -->
                </ul>


";
}
?>
