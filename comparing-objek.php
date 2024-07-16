<?php
// comparing objek
// menggunakan == (perbandingan properties) atau === (perbandingan identitas)
// contoh
require_once "oop/person.php";
use person\Person;
$musa = new person('musa','SBY');
$clone_musa = clone $musa;
$asep = new person('asep','SBY');
var_dump($musa == $asep); // ini akan melakukan perbandingan properti objek-properti1 == objek-properti1 = true
var_dump($musa === $asep);
var_dump($asep === $asep); // ini melakukan perbandingan lokasi objek jika lokasi-objek1 === lokasi-objek1 = true
var_dump($clone_musa == $musa);
var_dump($clone_musa === $musa); // membandingkan lokasi objek
