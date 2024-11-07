<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 6 SIDOARJO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/logo.jpg" alt="">
            </div>
            <div class="sekolah">
                <h2>SMPN 6 SIDOARJO</h2>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="?menu=home">HOME</a></li>
                    <li><a href="?menu=sejarah">SEJARAH</a></li>
                    <li><a href="?menu=kegiatan">KEGIATAN</a></li>
                    <li><a href="?menu=jadwal">JADWAL</a></li>
                    <li><a href="?menu=galeri">GALERI</a></li>
                    <li><a href="?menu=kontak">KONTAK</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
             if (isset($_GET["menu"])) {
                $menu = $_GET ["menu"];
                echo $menu;
             }

             if ($menu=="home") {
                require_once("pages/HOME.php");
             }
             if ($menu=="galeri") {
                require_once("pages/GALERI.php");
             }
             if ($menu=="jadwal") {
                require_once("pages/JADWAL.php");
             }
             if ($menu=="kegiatan") {
                require_once("pages/KEGIATAN.php");
             }
             if ($menu=="kontak") {
                require_once("pages/KONTAK.php");
             }
             if ($menu=="sejarah") {
                require_once("pages/SEJARAH.php");
             }


            require_once("pages/HOME.php")
            ?>
        </div>
        <div class="footer">
            <p>Web ini dibuat oleh "rey"</p>
        </div>
    </div>
</body>
</html>