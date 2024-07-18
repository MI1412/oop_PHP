<?php
// DateTime
// digunakan untuk memanipulasi data waktu
// default nya itu dari konfigurasi phpnya


// function di DateTime
// setTime($hour, $minute, $second) = mengubah waktu DateTime
// setDate($year, $month, $day) = mengubah tanggal DateTime
// setTimestamp($unixTimestamp) = mengubah unix timestamp DateTime


$date = new DateTime();
$date->setDate(2020, 04, 01); // mengubah tanggal
$date->setTime(12,12,12, 0); // mengubah waktu

var_dump($date);

// DateInterval 
// digunakan untuk memanipulasi waktu dan tanggal sebagian menggunakan function add milik DateTime
// namun function add menerima berupa DateInterval
// lihat detailnya disini https://www.php.net/manual/en/dateinterval.construct.php
// untuk membuat duration, harus diawali dengan karakter P yang artinya Period
// contoh
// catatan Y = Years, M = Months, D = Days, W = Weeks, H = Hours, M = Minutes, S = Seconds
$date->add(new DateInterval("P999Y")); // dalam periode 1 tahun
$dateInterval = new DateInterval("P1M"); // Periode 1 Month
$dateInterval->invert = true ; // mengurangi bulan = true
$date->add($dateInterval);
var_dump($date);

// DateTimeZone dia akan menggunakan default dari php jika belum di setting, untuk menyetting ada di php.ini
// function setTimeZone() untuk mengubah time zone
$date->setTimezone(new DateTimeZone('utc')); // mengubah DateTimeZone
var_dump($date);

// format DateTime
// untuk melakukan Format menggunakan function format()
// function format() menerima argument berupa format string, ini bisa kita gunakan untuk memanipulasi string format waktu
// detail : https://www.php.net./manual/en/datetime.format.php
// contoh
$date ->setTimezone(new DateTimeZone('Asia/Jakarta'));
$format = $date->format("d-m-Y H:i:s\n"); // format tampilan tanggal
echo "waktu saat ini $format";
// Y = tahun, m = bulan, d = tanggal, H = Hour, i = minutes, s = second

// parse DateTime
// php juga bisa melakukan sebaliknya
// menggunakan static function createFromFormat() dari class DateTime
// parsing adalah menggabungkan data menjadi satu elemen format
// contoh

// parsing DateTime
// createFromFormat(""Format tanggal" , "input user", "format DateTimeZone")
// konversi dari string !!hati hati jika memasukkan input user salah maka akan mengembalikan nilai boolean false
$date = DateTime::createFromFormat("Y-m-d H:i:s","1998-12-29 10:10:10", new DateTimeZone("Asia/Jakarta"));

// validasi
if ($date){
    var_dump($date);
}else{
    echo "data salah";
}