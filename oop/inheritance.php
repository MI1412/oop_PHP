<?php

use AnimalFood;
use Food;

interface AnimalShelter{
    // membuat abstrak class
    function adopt(string $name):Animal; // return animal
}
// biasanya functionnya akan sama seperti di induk class
class DogShelter implements AnimalShelter{
    // contoh kemampuan dari covariance
    function adopt(string $name): Dog{ // override return dari animal menjadi return bertipe dog sehingga dapat mengembalikan data lebih spesifik
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
class CatShelter implements AnimalShelter{
    function adopt(string $name): Cat{
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}
abstract class Animal
{
    public string $name;
    public abstract function run();
    public abstract function eat(AnimalFood $food);
}
require_once "oop/Food.php";
class Cat extends Animal{
    public string $name;
    public function run(){

    }
    public function eat(AnimalFood $animalFood){
        echo "cat eating\n";
    }
}
class Dog extends Animal{
    public string $name;
    public function run(){

    }
    public function eat(Food $animalFood):void{ // ini adalah kontravariance mengubah tipe argument atau parameter
        echo "Dog is Eating\n";
    }
}