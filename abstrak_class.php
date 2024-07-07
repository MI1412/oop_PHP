<?php
// abstrak class di php
// saat kita membuat class kita bisa menjadikan sebuah abstrak class
// abstrak class adalah class tersebut tidak bisa dibuat sebagai objek secara langsung hanya bisa diturunkan
// untuk membuat sebuah class menjadi abstrak, kita bisa menggunakan kata kunci abstract sebelum kata kunci class
// sehingga abstrak class bisa kita gunakan sebagai kontrak child class
// contoh
require_once "oop/location.php";
use Data\{Location,Kota as kota, Provinsi as prov, Negara as negara};

// $location = new Location('lokasi'); ini eror karena location adalah abstrak class tidak bisa dibuat objek
$kota = new kota;
$provinsi = new prov;
$negara = new negara;

// echo "Kota : $kota->nama\n";
// echo "Provinsi : $provinsi->nama\n";
// echo "Negara : $negara->nama\n";


// abstrak function
// saat kita membuat class yang abstract, kita bisa membuat abstrak function juga didalam class abstrak tersebut
// saat kita membuat sebuah abstrak function, kita tidak boleh membuat implementasi didalam block function tersebut
// artinya abstrak function wajib di override di class child
// abstrak function tidak boleh memiliki tingkat akses private
// contoh
$lokasi_kota = $kota->lokasi('SBY');
$lokasi_prov = $provinsi->lokasi('JATIM');
$lokasi_negara = $negara->lokasi('Indonesia');