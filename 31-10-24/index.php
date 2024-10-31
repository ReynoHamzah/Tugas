<?php

$identitas = ["nama"=>"Reyno Hamzah Anugerah",
"Alamat"=>"Bluru Kidul",
"telepon"=>"085934457774",
"Gmail"=>"reynohamzah8@gmail.com",
"Instagram"=>"reyhmzh1",
"Facebook"=>"reynohamzah",
"tiktok"=>"reynohamzah1"];

$sekolah = ["TK"=>"TK Tunas Islam",
            "SD"=>"SDN PUCANG 5",
            "SMP"=>"SMPN 6 Sidoarjo",
            "SMK"=>"SMK 2 Buduran",
            " S1"=>"Universitas Indonesia",
            " S2"=>"UI",
            " S3"=>"Havard University"];

$hobi = ["Running","Renang","Badminton","Gaming","Taekwondo"];   


$skill = ["C++"=>"Expert",
            "HTML"=>"Beginner",
            "CSS"=>"Newbie",
            "PHP"=>"Newbie"];

$deskripsi = "Saya adalah seorang atlet taekwondo, saya ingin sekali menjuarai<br>
                banyak kejuaraan dan menghasilkan uang dari situ.<br>
                saya saat ini belum ikut kejuaraan apapun, dikarenakan kendala uang dan<br>
                rasa ragu dan takut, saya ingin melawan rasa takut dan ragu itu<br>
                dan mempunyai mental sang juara."


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Riwayat Hidup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>DAFTAR RIWAYAT HIDUP</h1>
        <h2>Data Diri</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($identitas as $key => $value) {
                     ?>
                     <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                     </tr>
                     <?php   # code...
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Riwayat Pendidikan</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Pendidikan</th>
                    <th>Nama Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($sekolah as $key => $value) {
                       ?>
                       <tr>
                            <td><? $key ?></td>
                            <td><? $value ?></td>
                       </tr>
                       <?php # code...
                        }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Hobi</h2>
        <ul>
             <thead>
                    <tr>
                        
                    </tr>
             </thead>
             <tbody>
                    <?php
                    foreach ($hobi as $key => $value) {
                       ?>
                       <li>
                        <td><? $key ?></td>
                        <td><? $value ?></td>
                       </li>
                       <?php # code...
                        }
                    ?>
             </tbody>
        </ul>
        <hr>
    </div>
</body>
</html>