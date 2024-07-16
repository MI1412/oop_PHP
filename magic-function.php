<?php
// magic function
// magi function adalah function yang sudah ditentukan kegunaannya oleh php
// contoh yang sudah dibahas __construct(), __destruct(), __clone()
// masih banyak lagi di dokumentasinya
// https://www.php.net/manual/en/language.oop5.magic.php

// contoh sebagian magic method
// __tostring() merupakan salah satu magic function yang digunakan sebagai penanda string itu adalah objek
// misal membuat string dari objek kita
require_once "oop/student.php";
use Student\Student;
$student = new Student;
$student->nama = '90';
$student->nilai = 90;
$student->id = 81;
$string = (string) $student; // ini akan menjalankan magic function di bagian __tostring()
echo $string, PHP_EOL;
var_dump($student);

// __invoke() merupakan function yang dieksekusi ketika objek yang kita buat dianggap sebagai function
// misal ketika membuat objek $student, lalu kita melakukan $student(), maka secara otomatis function __invoke() akan dieksekusi

$student(1,'asep',true); // akan menjalankan __invoke()

// __debugInfo() digunakan untuk mengubah isi dari debug info, biasanya kita melakukan debug menggunakan var_dump()
// hati hati jika menambahkan const dan visibility private, protected
var_dump($student); // debug info akan dijalankan pada saat menjalankan vardump