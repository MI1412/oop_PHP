<?php
// import dalam php menggunakan kata kunci use
// sebelumnya kita sudah tahu bahwa untuk menggunakan class, function atau constant di namespace kita perlu menyebutkan nama namespacenya di awal
// jika terlalu sering menggunakan class, function atau constant yang sama, maka terlalu banyak duplikasi / salinan dengan menyebut namespace yang sama berkali-kali
// hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut dengan menggunakan kata kunci use
require_once "oop/person.php"; // meng import file person.php di folder oop
require_once "oop/Namespace_in_function.php";
use Person\one\Person; // memanggil namespace dengan class Person
// use function Hai\Info;  // memanggil namespace dengan function khusus di dalam namespace
// use const Hai\AUTHOR; // memanggil namespace dengan const khusus didalam namespace
// $imron = new Person('imron','SBY');
// echo $imron->nama.PHP_EOL;
// Info();
// echo PHP_EOL.AUTHOR;


// group use declaration
// kadang kita butuh melakukan import banyak hal di satu namespace yang sama
// php memiliki fitur grup use, dimana kita bisa import beberapa class, function, constant dalam perintah use
// untuk melakukan itu, kita bisa menggunakan kurung kurawal{}
// contoh group use declaration
use Person\{Person as person1, Person as person2, Contoh as contoh}; // menggunakan group use dalam namespace berisi beberapa class
// cara baca namaspace\subspace\{ini adalah grup tempat function, class, constant berada}

use function Hai\{Info as info, APP as app}; // menggunakan group use namespace dalam function
use const Hai\{AUTHOR as auth, APP as app}; // menggunakan group use namespace dalam const
$imron = new person1('imron','sby');
$amir = new person2('amir','sda');
$contoh = new contoh('contoh kedua','tes');
$nama_p1 = $imron->nama;
$nama_p2 = $amir->nama;
$contoh_nama = $contoh->nama;
$contoh_alamat = $contoh->alamat;

echo $nama_p1.PHP_EOL;
echo $nama_p2.PHP_EOL;
echo $contoh_nama.PHP_EOL;
echo $contoh_alamat.PHP_EOL;
info();
app();
echo PHP_EOL.auth.PHP_EOL;
echo app.PHP_EOL;