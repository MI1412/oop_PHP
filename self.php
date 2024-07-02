<?php
// properties VS Constant
// saat kita membuat objek, properties yang terdapat diclass akan secara otomatis dibuat per objek, oleh karena itu untuk mengakses properties, kita perlu menggunakan objek atau jika dari dalam objek tersebut sendiri, kita perlu menggunakan kata kunci this
// sedangkan berbeda dengan constant, constant diclass tidak akan dibuat per objek. Constant itu hidupnya diclass, bukan diobjek, oleh karena itu untuk mengaksesnya kita perlu menggunakan NamaClass::NAMA_CONSTANT
// secara sederhana, properties akan dibuat satu per instance class(objek), sedangkan constant dibuat satu perclass

// self keyword
// jika didalam class (misal difunction) kita ingin mengakses constant, kita perlu mengakses menggunakan NamaClass::NAMACONSTANT
// namun jika didalam class yang sama, kita bisa menggunakan kata kunci self untuk mempermudah
// bedanya this dengan self, kalau self mengakses class saat ini sedangkan this mengakses objek saat ini
// contoh self

require_once "oop/person.php";
// class Person
// {
//     var string $nama;
//     var string $alamat;
//     var string $negara;
//     var bool $laki2; // memberi deklarasi bahwa tipe data bool boleh diberi nilai null, jika tidak memakai ?(tanda tanya) sebelum tipe data objek akan eror
//     var int $no_rumah; // ini nilai default
//     const APP_VERSION = "1.9.0"; // variabel constant akan nempel diclass sedangkan properti akan nempel di objek, jadi untuk memanggil variabel constant cukup namaClass::NamaVarConst
//     function info(){
//         $APP_VERSION = self::APP_VERSION; // mengakses class menggunakan self
//         echo "nama : $this->nama\nalamat : $this->alamat\nnegara : $this->negara\nlaki laki : $this->laki2\nno rumah : $this->no_rumah\nAPP VERSION : $APP_VERSION";
//     }
// }
$person1 = new Person('AMIR','SBY');
$info = $person1->info();
echo $info;