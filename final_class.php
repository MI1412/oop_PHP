<?php
// kata kunci final bisa digunakan di class, dimana jika kita menggunakan kata kunci final sebelum class, maka kita menandakan bahwa class tersebut tidak bisa diwariskan lagi
// secara otomatis semua class childnya akan eror
// intinya kata kunci final digunakan untuk menutup penurunan didalam class kalau merasa tidak melakukan penurunan
// contoh
require_once "oop/final_class.php";
$sosmed = new Social_media;
$facebook = new facebook;
// $fakeFacebook = new fakeFacebook; eror
$Name_facebook = $facebook->nama = "facebook\n";
$Name_sosmed = $sosmed->nama = "sosial media\n";
// $Name_fake_facebook = $fakeFacebook->nama = 'fake facebook'; eror

echo $Name_facebook;
echo $Name_sosmed;
// echo $Name_fake_facebook; // eror