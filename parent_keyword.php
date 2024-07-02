<?php
// parent keyword
// kadang kita ingin mengakses function yang terdapat diclass parent yang sudah terlanjur kita override diclass child
// untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent
// sederhananya parent digunakan untuk mengakses class parent
// contoh di file manajer
require_once "oop/manager.php";
$manajer = new Manajer;
$founder = new Founder;
$nama_manajer = $manajer->nama = 'eko';
$nama_founder = $founder->nama = 'imron';
$sayNama_manager = $manajer->sayNama('asep');
$sayNama_founder = $founder->sayNama('ucup');
$getNamaManajer_fromFounder = $founder->getParentManager('anas');

echo $sayNama_manager;
echo $sayNama_founder;
echo $getNamaManajer_fromFounder;
