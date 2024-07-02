<?php
// constructor
// saat kita membuat objek, maka kita seperti memanggil sebuah function, karena kita menggunakan kurung()
// didalam class php, kita bisa membuat constructor, constructor adalah function yang akan dipanggil saat pertama kali objek dibuat
// mirip seperti di function kita bisa memberi parameter / argumen pada constructor
// nama constructor di php function __construct()
// contoh constructor

// class Person{
//     var string $nama;
//     var ?string $alamat = null;
//     var string $negara = "Indonesia";
    
    // membuat constructor
//     public function __construct(string $nama, ?string $alamat){ // didalam __construct harus diberi argumen yang sama seperti properties
//         $this->nama = $nama; // buat objek saat ini menjadi $nama
//         $this->alamat = $alamat;
//     }
// }

// $person1 = new Person('imron',null); // wajib memasukkan 2 argumen yang dibutuhkan saat mengakses objek dari class
// ketika membuat objek person() akan memanggil function __construct() untuk membuat objek
// $negara = $person1->negara= 'Indonesia';

// echo $person1;
// var_dump($person1);

// perbedaan constructor dengan properties yaitu properties digunakan untuk menyimpan data sedangkan constructor untuk menginisialisasi objek