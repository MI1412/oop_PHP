<?php
// function overriding
// function overriding adalah kemampuan mendeklarasikan ulang function di child class, yang sudah ada di parent class
// saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child, function yang diclass parent tidak bisa diakses lagi
// contoh di file manajer class manajer
require_once "oop/manager.php";
$founder = new Founder;
$manajer = new Manajer;
$nama_manajer = $manajer->nama = 'eko';
$sayNama_manager = $manajer->sayNama('budi');
$nama_founder = $founder->nama = 'amir';
$sayHalo_found = $founder->sayHalo('asep');

echo $sayHalo_found;
echo $sayNama_manager;


