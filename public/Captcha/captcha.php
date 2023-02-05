<?php
session_start();

header("Content-type: image/png");

$_SESSION['Captcha'] = "";

$gbr = imagecreate(175,50);
imagecolorallocate($gbr, 69, 179, 157);

putenv('GDFONTPATH=' . realpath('.'));
$color = imagecolorallocate($gbr, 253, 252, 252);
$font = "Allura-Regular.otf";
$ukuran_font = 20;
$angka2 = '';
$posisi = 33;

for ($i = 0; $i <= 5; $i++) {
    $angka = rand(0, 9);

    $angka2 .= $angka;

    $kemiringan = rand(20, 20);

    imagettftext($gbr, $ukuran_font, $kemiringan, 44 + 15 * $i, $posisi, $color, $font, $angka);



}

$host = mysqli_connect('localhost', 'root', '23122002', 'SYSBPS');
mysqli_query($host, 'TRUNCATE `SYSBPS_CAPTCHA`');
mysqli_query($host, 'INSERT INTO `SYSBPS_CAPTCHA` (`captcha`) VALUES ('.$angka2.')' );
imagepng($gbr);
imagedestroy($gbr);
