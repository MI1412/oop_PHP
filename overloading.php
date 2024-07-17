<?php
// overloading
// adalah kemampuan secara dinamis membuat properties atau function
// mirip seperti meta programming di bahasa ruby
// konsep overloading php berbeda dengan java
// overloading erat kaitannya dengan magic function yang sebelumnya sudah kita bahas

// properties overloading
// saat mengakses properties, maka secara otomatis properties akan diakses
// namun jika ternyata properties tersebut tidak tersedia di objeknya, maka php tidak secara otomatis menjadikan itu eror
// tetapi php akan memanggil ke magic function
// dengan demikian kita bisa membuat properties secara dinamis dengan magic function
// ada beberapa magic function yang bisa untuk properties overloading
// ada 4 magic function properties overloading
// __set($nama, $value):void = di eksekusi ketika mengubah properties yang tidak tersedia
// __get($nama):mixed = dieksekusi ketika mengakses properties yang tidak tersedia
// __isset($nama):bool = dieksekusi ketika isset() atau empty() properties yang tidak tersedia
// __unset($nama):void = dieksekusi ketika menggunakan unset() properties yang tidak tersedia
// overloading juga bisa digunakan untuk mengisi data secara dinamis / otomatis
// contoh
require_once "oop/Zero.php";
$zero = new Zero;
// $zero->halo; // ini akan membuat otomatis properties secara private dengan method __get()
$zero->nama = 'imron'; // membuat set otomatis ketika properties tidak ada valuenya
// unset($zero->nama); // menghapus properties yang dipilih
var_dump(isset($zero->nama)); // properties tidak ada ini memanggil magic function isset()
// var_dump($zero);

// function overloading
// saat mengakses function otomatis akan diakses tetapi ketika function tidak tersedia diobjeknya maka php akan memberinya eror
// tetapi php akan melakukan pemanggilan magic function
// dengan demikian bisa membuat function secara otomatis dengan memanfaatkan magic function

// magic function overloading
// __call($name,$arguments):mixed = dieksekusi ketika memanggil function yang tidak tersedia
// static__callStatic($name,$arguments):mixed = dieksekusi ketika memanggil static function yang tidak tersedia
$zero->yeeee = 'tes';
// membuat function otomatis / dinamis
$zero->loli('yayaya','testing'); // sebenarnya didalam di class zero tidak ada function ini dan argumennya juga
Zero::hehehah($zero->nama, $zero->yeeee); // memanggil static function yang belum tersedia
var_dump($zero);