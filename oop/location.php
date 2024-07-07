<?php

namespace Data;

abstract class Location
{ // ini tidak bisa diakses karena termasuk class abstrak
    // public string $nama;

    public abstract function lokasi(string $location); // ini abstrak function
        // $this->nama = $nama; ini tidak boleh dibuat saat membuat abstrak function
}
class Kota extends Location
{
    public function lokasi(string $location){
        echo "Kota : $location\n";
    }
}
class Provinsi extends Location
{
    public function lokasi(string $location){
        echo "Provinsi : $location\n";
    }
}
class Negara extends Location
{
    public function lokasi(string $location){
        echo "Negara : $location\n";
    }
}