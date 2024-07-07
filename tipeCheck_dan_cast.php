<?php
// type check dan casts
// sebelumnya kita sudah tahu cara melakukan konversi tipe data bukan class
// khusus untuk tipe data objek kita tidak perlu melakukan konversi secara eksplisit
// namun agar aman, sebelum melakukan casts pastikan kita melakukan type check(pengecekan tipe data) dengan menggunakan kata kunci instanceof
// hasil operator instanceof adalah boolean, true jika tipe data sesuai, false jika tidak sesuai
// contoh type check dan casts
require_once "oop/programmer.php";
$company = new company;
$programmer = new programmer('imron');
$frontend = new FrontEnd('asep');
$backend = new BackEnd('abyan');
sayHalo($backend);