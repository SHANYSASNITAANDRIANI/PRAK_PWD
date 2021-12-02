<?php
session_start(); //mulai session
$random_alpha = md5(rand());// membuat kode unik dengan md5
$captcha_code = substr($random_alpha, 0, 6);//mengambil nilai dalam bentuk string
$_SESSION["captcha_code"] = $captcha_code;// data pada captcha di inputkan dan memulai sesi
$target_layer = imagecreatetruecolor(70,30);//membuat gambar dalam bentuk warna
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119);//kembalikan suatu identifier yang mewakili warna rgb dari komposisi komponen tertentu
imagefill($target_layer,0,0,$captcha_background);//mengisi warna dengan yang sudah di tentukan
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);//mengambil suatu identifier yang mwakili komposisi komponen rgb tertentu
imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
header("Content-type: image/jpeg");//membuat suatu isi dalam bentuk jpeg
imagejpeg($target_layer);//pembuatan akhir