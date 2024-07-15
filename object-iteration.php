<?php
// object iteration
// saat kita membuat objek dari sebuah class, kita bisa melakukan iterasi ke semua properties yang terdapat di object tersebut menggunakan foreach
// hal ini mempermudah kita saat ingin mengakses semua properties yang ada di objek
// yang diambil pada saat perulangan adalah keynya
// secara default hanya properties yang public bisa diakses oleh foreach
// contoh
require_once "oop/data1.php";
$data = new Data1;
foreach ($data as $kunci=>$nilai){ // contoh pengulangan properti objek
    // cara bacanya foreach($var_objek as $nama_key=>$nama_value)
    echo "$kunci : $nilai\n";
}
// aslinya di properti ada first, second, third,fourth, fifth
// fourth dan fifth tidak bisa terindeks karena properti bersifat bukan publik
