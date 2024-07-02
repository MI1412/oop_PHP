<?php
// inheritance
// inheritance atau perwarisan kemampuan untuk menurunkan sebuah class ke class lain
// dalam artian, kita bisa membuat class parent dan class child
// sub class / class child, hanya bisa punya satu super class / class parent, namun satu class parent bisa punya banyak class child / sub class
// saat sebuah class diturunkan,maka semua properties dan function yang ada di class parent, secara otomatis akan dimilliki oleh class child / sub class
// untuk melakukan pewarisan di class child, kita harus menggunakan kata kunci extends, lalu diikuti dengan nama class parentnya
// contoh
// akses sub class
require_once "oop/manager.php";
$manajer = new Manajer;
$founder = new Founder;
$nama_founder = $founder->nama = 'Muhammad Imron';
$nama_manajer = $manajer->nama = 'Musa K';
$sayNama_manajer = $manajer->sayNama('eko');
$sayNama_founder = $founder->sayNama('Budi'); // mengakses sub class yang diturunkan dari class manajer

echo "Nama Manajer : $nama_manajer\n";
echo $sayNama_manajer;
echo "Nama Founder : $nama_founder\n";
echo $sayNama_founder;