<?php
// namespace
// saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
// jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan jenis class
// php memiliki fitur namespace, dimana kita bisa menyimpan class - class kita di dalam namespace
// namespace bisa nested / bersarang dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu menyebutkan nama spacenya
// namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace nama class sama tidak akan menjadikan eror di php
// contoh namespace
// untuk membuat namespace, kita bisa menggunakan kata kunci namespace
// jika kita ingin membuat sub namespace, cukupp gunakan karakter \ setelah namespace sebelumnya
require_once "oop/person.php";
$imron = new \Person\one\Person('imron','SBY'); // mengakses namespace \namaspace\subspace\namaClass
$info_imron = $imron->info();
echo $info_imron;
echo $imron->nama;


// class tanpa namespace
// ketika membuat class yang sama akan eror
// class Conflict{
    
// }
// class Conflict{
    
// }


// function dan constant di namespace
// selain class, kita juga menggunakan function dan constant di namespace
// dan jika kita ingin menggunakan function atau constant tersebut, kita bisa menggunakannya dangan diawali dengan nama spacenya
// contoh
require_once "oop/namespace_in_function.php";
$author = namespace\AUTHOR; // akses Constanta dalam namespace
// deklair nama space\sub space\ nama function atau constanta
$helpMe = namespace\helpMe(); // akses function dalam namespace
echo $helpMe;
echo $author;

// global namespace
// secara default saat kita membuat kode di php sebenarnya itu disimpan di global namespace
// global namespace adalah namespace yang tidak memiliki nama namespace
// contoh global namespace
// $help_me = namespace\helper(); mengakses namespace global
