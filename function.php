<?php
// function dioop php
// selain menambahkan properties, kita juga bisa menambahkan function ke object
// cara dengan mendeklarasikan function tersebut didalam block class / badan class
// sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter
// untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama methodnya, sama seperti mengakses properties
// contoh function dalam class dan objek
require_once "oop/person.php";

$person1 = new Person('IMRON','SBY');
$halo = $person1->sayNama('EKO'); // mengakses function dalam class sama seperti mengakses properties
echo $halo; // menampilkan function sayNama()
// var_dump($person1);
