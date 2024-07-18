<?php
// Regular Expression
// php mendukung regular expression yang kompatibel dengan bahasa pemrograman perl
// regular expression merupakan fitur yang digunakan untuk melakukan pencarian di string menggunakan pola tertentu dan juga bisa melakukan pencocokan string dengan pola tertentu
// pola / pattern di regular expression bisa dilihat disini : https://www.php.net/manual/en/pcre.pattern.php
// function di regular expression
//1.  preg_match($pattern ,$subject) atau
// preg_match_all($pattern, $subject) = digunakan untuk mencari match pattern
// preg_replace($pattern, $subject) = digunakan untuk mencari match pattern
//2. preg_replace($pattern, $replacement, $subject) = digunakan untuk mereplace / menimpa semua pattern dengan replacement
//3. preg_split($pattern, $subject) = digunakan untuk memotong dengan pattern menjadi array

// contoh
// 1.
$matches = [];
$hasil = (bool)preg_match_all("/muh|imron|ammad/i","muhammad imron",$matches); // cara bacanya pre_match_all("pola/i","subjek", $data_reference)
// /i disini adalah incase sensitive
var_dump($hasil);
var_dump($matches);

// 2.
$result = preg_replace("/anjing|bangsat/i","***","dasar lu anjing, bangsat");
// cara bacanya preg_replace("/pola/i","kata kata yang direplace", "subjek")
echo $result . PHP_EOL;

// 3.
$string = "muhammad-asep kurniawan";
$result = preg_split("/[\s,-]/", $string);
// $result_string = (string) $result; konvert array ke string
// cara bacanya preg_split("/pola[format-string, pola-dicari]/","subjek")
var_dump($result); // mengambil semua isi subjek bentu array
echo $result[1]; // mengambil salah satu isi array
// echo $result_string;
// var_dump($result_string);