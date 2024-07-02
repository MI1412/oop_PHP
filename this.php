<?php
// this keyword
// saat kita membuat kode didalam function didalam class, kita bisa menggunakan kata kunci this untuk mengakses objek saat ini
// misal kadang kita butuh mengakses properties atau function di class yang sama
// contoh this
require_once "oop/person.php";

$person1 = new Person('Imron','SBY');
$sayNama = $person1->sayNama('eko');
echo $sayNama;
var_dump($person1);