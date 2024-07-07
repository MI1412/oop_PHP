<?php
// getter dan setter


// encapsulasi
// enkapsulasi adalah memastikan data sensitif sebuah objek tersembunyi dari akses luar
// hal ini bertujuan agar kita bisa menjaga agar data sebuah objek tetap baik dan valid
// untuk mencapai ini, biasanya kita akan membuat semua properties menggunakan tingkat akses private, sehingga tidak bisa diakses dari luar
// agar bisa diubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties

// getter dan setter
// diphp proses enkapsulasi sudah dibuat standarisasinya, dimana kita bisa menggunakan getter dan setter method
// getter adalah function yang dibuat untuk mengambil data field
// setter adalah function untuk mengubah data field
// contoh method getter dan setter
// tipe data bolean contoh method getter is_namaProperti():bool contoh method setter set_namaProperti(bool value)
// kalau tipe datanya lainnya contoh method getter get_namaProperti():tipe data dan contoh setter set_namaProperti(tipe data value)
// contoh getter dan setter
require_once "oop/category.php";
$laptop = new Category;
$nama_laptop = $laptop->setNama('asus '); // memberi set nama laptop yang bernama asus
$harga_laptop = $laptop->setHarga(true); // set boolean dari laptop
$isHarga = $laptop->isHarga(); // mengambil harga dari laptop
$getNama = $laptop->getNama(); // mengambil nama dari laptop
echo "nama : $getNama\n";
var_dump($isHarga);
