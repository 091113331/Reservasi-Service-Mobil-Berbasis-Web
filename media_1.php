<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<?php


  error_reporting(0);
  session_start();
include "config/koneksi.php";
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="stylePKM.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div id ="main">
        <div id ="header">
            <div id="user">
        <?php
             include "welcome.php";
        ?>
            </div>
            <div id ="menu">

                <?php include "menu.php";?>
            </div>
            <div id ="logo">
            <a href="media.php?module=home"><img src="images/logo.gif" title="Trial Services" alt="Trial Services" width="230" height="80" border="0" /></a>
            </div>


       </div>
       <div id ="bodyPanel">
            <div id="left">
                <div id="leftMenu">
                    <ul>
                        <li><a href='media.php?module=home'>Beranda</a></li>
                        <li><a href='media.php?module=info'>Informasi</a></li>
                        <li><a href='media.php?module=ketentuan'> Ketentuan Servis</a></li>
                        <li><a href='media.php?module=kontak'>Kontak Kami</a></li>

                    </ul>
                </div>
            </div>
            <div id ="centerPan">
                <?php include "tengah.php";?>

            </div>
            <div id ="right">
                <div id="ads">
                <h2><span>new</span><br>Sponsor
                    overview </h2>
                <h2><span>new</span><br>Sponsor
                    overview </h2>
                <h2><span>new</span><br>Sponsor
                    overview </h2>
                </div>

            </div>

        </div>




    </div>
    <div id ="footerPanel">
            <div id="footerbodyPanel">
              <ul class="templateworld">
                <li></li>
                <p><b><center>HERY JAYA MOTOR </center></b>
                <p><b><center>_ Jl. Medan Tanjung Morawa _</center></b>
                <a href="" target="_blank"></a>
                </p>
              </ul>

      </div>


        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
