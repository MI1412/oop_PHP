<?php

use Data\{CanRun,Hasname,sayHello,sayGood};

// // trait
// // selain class dan interface di php terdapat fitur bernama trait
// // trait mirip dengan abstrak class, kita bisa membuat konkrit function atau abstrak function
// // yang membedakan adalah di trait bisa kita tambahkan ke dalam class lebih dari satu
// // trait mirip extension, dimana kita bisa menambahkan konkrit function ke dalam class dengan trait
// // secara sederhana trait adalah digunakan untuk menyimpan function-function yang bisa digunakan ulang dibeberapa class
// // untuk menggunakan trait diclass, kita bisa menggunakan kata kunci use
// // contoh trait
require_once "oop/trait.php";
// class ParentPerson{
//     //  memakai trait function yang ada didalam di trait akan ditambahkan kedalam ke class
//     // cara bacanya use namaTrait, function

//     public function sayGood(?string $nama): void
//     {
//         echo "good  di person\n";
//     }

//     public function sayHello(?string $nama) // kita membuat function yang sama di trait padahal sudah ada functionnya disana
//     // pertanyannya yng mana di prioritaskan?->
//     {
//         echo "halo seseorang\n";
//     }
// }
// class Person extends ParentPerson{ // -> jika ada function yang sama di child class akan tergantikan di trait jika function sama, sedangkan parent class akan menggantikan function di trait jika ada function sama
//     use sayGood,SayHello,Hasname,CanRun{
//         // sayHello as private; // -> ini contoh override visibility
//         // sayGood as private; // ini akan eror karena visibility nya private
//     }
//     public function Run(): void // override trait
//     {
//         echo "dia $this->nama berlari\n";
//     }
// }

// $imron = new Person; // membuat objek kemudian memakai trait yang ada
// $imron->sayGood('imron'); //-> artinya diclass lebih diutamakan ketika override dari trait, ketika ada function yang sama, tetapi berbeda ketika ada child classnya->
// $imron->sayHello('amir');
// // trait properties
// // berbeda dengan interface, ditrait, kita bisa menambahkan properties
// // dengan menambahkan properties, secara otomatis class tersebut akan memiliki properties yang ada di trait
// // contoh di file trait.php
// $imron->nama = "eko\n"; // akses properti didalam trait
// var_dump($imron);

// // trait abstract override
// // selain konkrit function, ditrait juga kita bisa menambahkan abstrak function
// // jika terdapat abstrak function ditrait, maka secara otomatis function tersebut harus di override di class yang menggunakan trait tersebut
// // contoh
// $imron->Run();

// trait override
// jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait, maka secara otomatis trait akan meng-override function tersebut
// namun jika kita membuat function yang sama di classnya, maka secara otomatis kita akan meng-override function di trait
// sehingga posisinya seperti ini ParentClass = override by=> Trait = override => ChildClass
// contoh
// ketika override function diparent class maka function yang ada di trait teroverride, kecuali function yang ada di kelass turunannya

// trait visibility override
// selain melakukan override function diclass, kita juga bisa melakukan override visibility function yang terdapat di trait
// namun untuk melakukan ini tidak perlu membuat function baru diclass, kita bisa gunakan secara sederhana ketika menggunakan traitnya
// contoh visibility->

// trait conflict
// jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut
// maka hal tersebut akan menyebabkan konflik
// jika terjadi konflik seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci insteadof
// contoh trait konflik ke-1

trait A{
    function doA(){
        echo "a\n";
    }
    function doB(){
        echo "b\n";
    }
}
trait B{
    function doA(){
        echo "A\n";
    }
    function doB(){
        echo "B\n";
    }
}

class sample{
    use A,B{
        A::doA insteadof B; // cara bacanya : trait A, untuk function doA akan dipakai dari trait A daripada trait B
        B::doB insteadof A; // trait B akan memakai function doB daripada trait A
    } // ini akan eror karena nama function nya sama
}

$sample = new sample;
$sample->doA(); // ini akan eror karena kedua fungsinya saling bentrok / collision, solusinya adalah memakai salah satu traitnya dari salah satu function
$sample->doB();

// trait inheritance
// sebelumnya kita sudah tahu bahwa class bisa menggunakan trait lebih dari satu
// lantas bagaimana dengan trait yang menggunakan trait lain?
// trait bisa menggunakan trait lain, mirip seperti interface yang bisa implement interface lain
// untuk menggunakan trait lain dari trait, penggunaannya sama seperti dengan penggunaan trait di class
// contoh
trait All{
    use sayGood,SayHello,Hasname,CanRun; //cukup menggunakan use untuk menurunkan method ke dalam trait All
    // sebenarnya ini seperti menambahkan trait dari yang lain
}

class person{
    use All; // dari trait all menurunkan method dari trait
    function Run(): void
    {
        echo "$this->nama RUNNING\n";
    }
}

$asep = new person;// ini adalah trait inheritance
$asep->nama = 'asep';
$asep->Run();
var_dump($asep);