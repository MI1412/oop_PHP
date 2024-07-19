<?php
// tanpa reflection
require_once "LoginRequest.php";
class ValidationUtill{
    // pembuatan ini manual
    static function validate(LoginRequest $loginRequest){
        if (!isset($loginRequest->userName)){
            throw new ValidationException("username not found");
        }elseif (!isset($loginRequest->Password)){
            throw new ValidationException("password not found");
        }
    }
    // pakai reflection
    // ini kelihatannya lebih panjang daripada tanpa reflection, tetapi menggunakan reflection juga bisa validate 2x sedangkan validate diatas cuma satu kali
    static function validateReflection($loginRequest){
        // menggunakan reflection bisa mengecek isi class, objek, properti, dan method
        $reflection = new ReflectionClass($loginRequest);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property){
            if (!$property->isInitialized($loginRequest)){
                throw new ValidationException("$property->name is not set");
            }elseif (is_null($property->getValue($loginRequest))){
                throw new ValidationException("$property->name is null");
            }
        }
    }
}


