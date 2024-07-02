<?php
// objek adalah data yang berisi field / properties / attributes dan method / function / behavior
// objek adalah instansiasi dari sebuah class
// untuk membuat object kita bisa menggunakan kata kunci new, dan diikuti dengan nama class dan kurung()

// class
// class adalah blueprint ,prototipe atau cetakan untuk membuat objek
// class berisikan deklarasi semua properties dan functions yang dimiliki oleh object
// setiap objek selalu dibuat dari class
// dan sebuah class bisa membuat objek tanpa batas
// untuk membuat class, kita bisa menggunakan kata kunci class
// penamaan class biasa menggunakan CamelCase
// contoh
// class Person{
    
// }

// properties / beberapa properti
// field /properties / attribute adalah data yang bisa kita sisipkan didalam object
// namun sebelum kita bisa memasukkan data di fields, kita harus mendeklarasikan data apa saja yang dimiliki objek tersebut didalam deklarasi class-nya
// membuat field sama seperti membuat variabel, namun ditempatkan di block / badan class, namun di awali dengan kata kunci var
// contoh properties
// class Person{
//     var $name;
//     var $alamat;
//     var $negara;
// }
// manipulasi properties
// field yang ada diobject bisa kita manipulasi
// untuk memanipulasi data field, sama seperti cara pada variabel
// untuk mengakses field kita butuh kata kunci -> setelah nama object dan diikuti nama fields nya
// contoh -> di file data.php

// properties type declaration
// sama seperti difunction, diproperties pun, kita bisa membuat type declaration
// ini membuat php otomatis mengecek tipe data yang sesuai dengan type declaration yang telah ditentukan
// jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan eror
// ingat, bahwa php memiliki fitur type juggling yang secara otomatis bisa mengkonversi ke tipe data lain
// untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var diproperties
// contoh
// class Person{
//     var string $name;
//     var string $alamat;
//     var string $negara;
//     var bool $laki2;
//     var int $no_rumah;
// }

// default properties value
// sama seperti divariabel, di properties juga kita bisa langsung mengisi valuenya
// ini mirip seperti default value, jadi jika tidak diubah di objek, maka properties akan memiliki value tersebut
// contoh default properties
// class Person
// {
//     var string $name = 'isi namanya woi';
//     var string $alamat = 'none';
//     var string $negara = 'tinggal dimana lu';
//     var bool $laki2 = true;
//     var int $no_rumah = 19; // ini nilai default
// } // akses default value -> di file data.php

// nullable properties
// saat kita menambah type declaration di properties atau difunction argument, maka secara otomatis kita tidak bisa mengirim data null kedalam properties atau function argument tersebut
// diphp 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null ke properties atau function arguments
// caranya sebelum type declaration nya, kita bisa tambahkan tanda ?
// contoh nullable properties
class Person
{
    var string $name = 'isi namanya woi';
    var string $alamat = 'none';
    var string $negara = 'tinggal dimana lu';
    var ?bool $laki2 = null; // memberi deklarasi bahwa tipe data bool boleh diberi nilai null, jika tidak memakai ?(tanda tanya) sebelum tipe data objek akan eror
    var int $no_rumah = 19; // ini nilai default
} // akses default value -> di file data.php
