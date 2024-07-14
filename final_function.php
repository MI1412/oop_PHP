<?php
// final function
// kata kunci final juga bisa digunakan di function
// jika sebuah function kita tambahkan kata kunci final, maka artinya function tersebut tidak bisa di override lagi diclass childnya
// ini sangat cocok jika kita ingin mengunci implementasi dari sebuah method agar tidak bisa diubah lagi oleh class childnya
// contoh final function
require_once "oop/final_class.php";
$facebook = new facebook;
$facebook->login('p',9);