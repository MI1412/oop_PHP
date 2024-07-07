<?php
// sebelumnya kita sudah tahu bahwa abstrak class bisa kita gunakan sebagai kontrak untuk class childnya
// namun sebenarnya yang lebih tepat untuk kontrak adalah interface
// jangan salah sangka bahwa interface disini bukanlah user interface
// interface mirip seperti abstrak class, yang membedakan adalah di interface, semua method otomatis abstrak, tidak memiliki block
// di interface kita tidak boleh memiliki properties, kita hanya boleh memiliki constant
// untuk mewariskan interface, kita tidak menggunakan kata kunci extends, melainkan implements
// extends hanya bisa 1 kalau implements lebih dari 1
// dan berbeda dengan class, kita bisa implements lebih dari satu interface
// contoh
require_once "oop/car.php";

use Data\Avanza;
// use Data\Car;
// $car = new Car; akan eror karena ini adalah prototipe atau cetak biru atau interface
$avanza = new Avanza;
$avanza->drive();


// interface inheritance / penurunan interface
// sebelumnya kita sudah tahu kalau di php, child class hanya bisa punya 1 class parent
// namun berbeda dengan interface, sebuah child class bisa implement lebih dari 1 interface
// bahkan interface pun bisa implement interface lain, bisa lebih dari 1. Namun jika interface ingin mewarisi interface lain, kita menggunakan kata kunci extends, bukan implements
// contoh di file car.php
$avanza->getBrand();
var_dump($avanza->IsMaintenance());
