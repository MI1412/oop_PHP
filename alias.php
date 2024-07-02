<?php
// alias
// saat kita menggunakan use artinya kita tidak perlu lagi menggunakan nama namespace diawal class ketika kita ingin membuat class tersebut
// namun bagaimana jika kita ternyata nama classnya sama
// untungnya php memiliki fitur yang namanya alias
// alias adalah kemampuan membuat nama lain dari class, function atau constant yang ada
// kita bisa menggunakan kata kunci as setelah melakukan use
// contoh alias
require_once "oop/person.php";
require_once "oop/Namespace_in_function.php";
use Person\one\Person as Person1; // menggunakan alias pada class person didalam namespace person
use Person\two\Person as Person2; // menggunakan alias pada class person didalam namespace person
use function Hai\Info as info; // menggunakan alias pada function dalam namespace
use const Hai\AUTHOR as auth; // menggunakan alias pada constanta dalam namespace
$imron = new Person1('imron','sby');
$amir = new Person2('amir','sda');
$nama_p1 = $imron->nama;
$alamat_p1 = $imron->alamat;
$nama_p2 = $amir->nama;
$alamat_p2 = $amir->alamat;

echo $nama_p1.PHP_EOL;
echo $nama_p2.PHP_EOL;
info();
echo PHP_EOL.auth.PHP_EOL;

