<?php
// stdclass
// stdclass adalah class kosong dari php
// std class biasanya digunakan ketika kita melakukan konversi dari tipe data lain menjadi objek
// stdclass sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array ke objek secara otomatis
// kepanjangan stdclass adalah standart class
// contoh
// konversi array ke stdclass
$array = [
    "callName"=>"imron",
    "firstName"=>"muhammad",
    "lastName"=>"imron"
];
$objek = (object)$array; // konversi array ke objek
// cara bacanya $var = (tipe data objek)$array-konversi
var_dump($objek);
echo PHP_EOL . $objek->callName . PHP_EOL;
echo $objek->firstName . PHP_EOL;
echo $objek->lastName . PHP_EOL;

// konversi objek menjadi array
// cara bacanya (tipe data array)$var_objek
$array_list = (array)$objek;
var_dump($array_list);
require_once "oop/person.php";
use person\person;
$person = new person('p','hai');
var_dump($person);
$array_person = (array)$person;
var_dump($array_person);