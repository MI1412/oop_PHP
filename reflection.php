<?php
// reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan
// reflection adalah fitur yang biasanya digunakan saat kita membuat framework
// reflection bisa melakukan memeriksa dan manipulasi class, method, properti, dan parameter
// selengkapnya : https://www.php.net/manual/en/book.reflection.php

// contoh saat membuat validation Framework
// ini menggunakan reflection
// validation frameworknya cukup sederhana, kita hanya mengecek apakah nilai bernilai null atau tidak, kalo null dan belum diset, kita throw validationException
// tanpa reflection, biasanya untuk mengerjakan hal ini dibutuhkan pengecekan secara manual
require_once "oop/reflection.php";
require_once "oop/LoginRequest.php";
require_once "oop/ValidationException.php";
// contoh tanpa reflection
// ini pembuatan function validate secara manual bertele-tele
$request = new LoginRequest();
// ValidationUtill::validate($request);


// contoh pakai reflection
// jadi pada saat pembuatan validation produk, login, semuanya bisa dengan validateReflection($req)
$request->userName = "hai";
$request->Password = "hai";

// bisa membuat alat validate dengan class berbeda
ValidationUtill::validateReflection($request);
// contoh
class RegisterUserRequest{
    public ?string $name;
    public ?string $password;
    public ?string $addres;
    public function __construct($name,$password,$addres){
        $this->name = $name;
        $this->password = $password;
        $this->addres = $addres;
    }
}
$registerUser = new RegisterUserRequest("asep", "admin123", "SBY");
ValidationUtill::validateReflection($registerUser); // memanggil abstrak function dari class validation utill