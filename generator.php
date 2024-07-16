<?php
// generator
// sebelumnya kita tahu bahwa untuk membuat objek yang bisa di iterasi, kita menggunakan iterator
// namun pembuatan iterator secara manual itu sangat mudah sekali
// untungnya diphp, terdapat fitur generator, yang bisa kita gunakan untuk membuat iterator secara otomatis hanya dengan menggunakan kata kunci yield
// contoh
require_once "static.php";
$ganjil = Math::getGanjil(18);
foreach ($ganjil as $value){
    echo "ganjil $value\n";
}

$genap = Math::getGenap(21);
foreach($genap as $value){
    echo "genap $value\n";
}