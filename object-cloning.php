<?php
// object cloning
// kadang kita ada kebutuhan untuk menduplikasikan sebuah objek
// biasanya untuk melakukan hal ini, kita bisa membuat objek baru lalu menyalin semua properties diobjek awal ke objek baru
// untungnya php mendukung objek cloning
// kita bisa menggunakan perintah clone untuk  membuat duplikasi objek
// secara otomatis semua properties di objek awal akan di duplikasi ke objek baru
// contoh
// require_once "oop/person.php";
// use Person\Person;
// $musa = new person('musa','SBY');
// $musa->setSample('tes');
// $amir = clone $musa; // melakukan cloning dari objek $musa
// $amir->setSample('tes');
// $amir->__construct('amir','SDA');
// var_dump($amir);
// var_dump($musa);

// __clone() function
// kadang menyalin semua properties bukanlah yang kita inginkan
// misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
// jika kita ingin memodifikasi cara php melakukan clone, kita bisa membuat function didalam classnya dengan nama function __clone()
// function __clone() akan dipanggil di objek hasil duplikasi setelah proses duplikasi selesai
// maksudnya function __clone akan dieksekusi setelah objek disalin semua
// jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()
// alur dibawah ini adalah objek $musa diclone diobjek $amir dari $amir akan dipanggil function clone
// $musa=> clone $amir => $amir->__clone
// contoh
require_once "oop/person.php";
use Person\Person;
$musa = new person('musa','SBY');
$musa->setSample('tes');
$musa2 = clone $musa; // melakukan cloning dari objek $musa
// telah melakukan unset clone di class
// var_dump($musa);
var_dump($musa2);
