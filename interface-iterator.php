<?php
// sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
// jika kita ingin menangani hal ini secara manual, kita bisa menggunakan iterator
// iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat iterator secara manual lumayan cukup cukup ribet, oleh karena itu sekarang kita akan gunakan ArrayIterator, yaitu iterator yang menggunakan array sebagai data iterasinya
// dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface IteratorAggregate, disana kita hanya butuh meng override function getIterator() yang mengembalikan data iterator
// contoh
require_once "oop/data1.php";
$data->getIterator();
var_dump($data);