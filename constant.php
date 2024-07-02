<?php
// constant
// properties diclass, bisa diubah mirip seperti variabel
// diclass juga kita bisa membuat constant, data yang tidak bisa diubah
// di materi php dasar, kita belajar untuk membuat constant itu perlu menggunakan function define()
// namun sejak php 7.4, kita bisa menggunakan kata kunci const untuk membuat constant, mirip seperti variabel, namun tidak menggunakan karakter $
// penamaan const lebih baik pakai huruf besar semua



require_once "oop/person.php";
// class Person
// {
//     var string $name = 'isi namanya woi';
//     var string $alamat = 'none';
//     var string $negara = 'tinggal dimana lu';
//     var ?bool $laki2 = null; // memberi deklarasi bahwa tipe data bool boleh diberi nilai null, jika tidak memakai ?(tanda tanya) sebelum tipe data objek akan eror
//     var int $no_rumah = 19; // ini nilai default
//     const APP_VERSION = "1.9.0"; // variabel constant akan nempel diclass sedangkan properti akan nempel di objek, jadi untuk memanggil variabel constant cukup namaClass::NamaVarConst
// } // akses default value -> di file data.php
$person1 = new Person('Imron','SBY');
$version_app = Person::AUTHOR; // menampilkan variabel constant didalam class
echo $version_app;