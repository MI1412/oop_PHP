<?php
// polymorphism
// polymorphism berasal dari bahasa yunani yang berarti banyak bentuk
// dalam oop, polymorhism adalah kemampuan sebuah objek berubah menjadi bentuk lain
// polymorphism erat hubungannya dengan inheritance
// ini sama seperti inheritance perbedaannya adalah dari class ditambahkan attribute tipe class baru lagi tetapi bisa mengakses class turunannya dan dapat dirubah
// polimorfisme adalah sebuah properti atau tipe data dalam class bisa berbentuk-bentuk
// contoh polymorphism bisa diubah value dari company
// contoh disini ada class company dengan atribut programmer, BackEnd, FrontEnd
require_once "oop/programmer.php";
// teknik membuat
// class Company{ // class company
//     var programmer $programmer;// atribute objek bertipe programmer
//     var BackEnd $BE;
//     var FrontEnd $FE;
    

// }
// $company = new Company;
// $programmer = $company->programmer = new programmer("imron\n");
// $BE = $company->BE = new BackEnd("amir\n");
// $FE = $company->FE = new FrontEnd("erge\n");
// $nama_Programmer = $programmer->nama;
// $nama_Fe = $FE->nama;
// $nama_Be = $BE->nama;
// echo $nama_Programmer;
// echo $nama_Be;
// echo $nama_Fe;
// var_dump($company);  // jika dilihat dalam class company ada atribute dengan tipe class yang dalam class disusun berbentuk array
sayHaloProgrammer(new programmer('programmer')); // contoh polimorfisme dari function
// polimorfisme function adalah class yang bisa dijadikan tipe data didalam argumen function dan dapat diubah - ubah
sayHaloBE(new BackEnd('BE'));
sayHaloFE(new FrontEnd('FE'));