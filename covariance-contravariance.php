<?php
// covariance dan contravariance

// covariance
// saat meng override function dari induk class, biasanya child class akan membuat function yang sama dengan function yang di parent
// covariance bisa meng override return function yang di induk class dengan return value yang lebih spesifik
// contoh
require_once "oop/Food.php";
require_once "oop/inheritance.php";



$cat = new Cat;
// $catShelter = new catShelt;
// $cat = $catShelter->adopt('cat');

// echo $cat->name;
// var_dump($catShelter);


// contravariance
// sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function argument yang lebih tidak spesifik dibandingkan parentnya
// contoh
$dog = new Dog;
$dog->eat(new Food);
$cat->eat(new AnimalFood);

