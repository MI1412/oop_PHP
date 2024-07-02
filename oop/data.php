<?php
require_once "oop/object.php";
$person1 = new Person();
$person2 = new Person();

// var_dump(($person2));
// contoh -> manipulasi properties
// $nama = $person1->name = 'imron';
// $alamat = $person1->alamat = 'surabaya';
// $negara = $person1->negara = 'indonesia';
// $gender = $person1->laki2 = true;
// $no_rumah = $person1->no_rumah = 19;
// echo "Nama : $nama\n";
// echo "Alamat : $alamat\n";
// echo "Negara : $negara\n";
// echo "Laki2 : $gender\n";
// echo "No rumah : $no_rumah\n";

// var_dump(($person1));

// melihat nilai default dari objek
$nama_default = $person2->name;
$alamat_default = $person2->alamat;
$negara_default = $person2->negara;
$gender_default = $person2->laki2;
$no_rumah_default = $person2->no_rumah;
echo "ini adalah nilai default dari \nnama : $nama_default\nalamat : $alamat_default\nnegara : $negara_default\ngender : $gender_default\nno rumah : $no_rumah_default\n";
var_dump($person2);