<?php
namespace Data;

interface HasBrand{ // melakukan penurunan class
    function getBrand():string;
}
interface IsMaintenance{
    function IsMaintenance():bool;
}
interface Car extends HasBrand,IsMaintenance{  // penurunan dari interface memakai extends, kalau dari interface ke class menggunakan implements
    // ini sebenarnya abstrak
    function drive():void; // ini juga abstrak
    function getTire():int; // kenapa tidak pakai abstrak class saja atau abstrak function karena di interface juga sama seperti abstrak class dan mendukung multiple inheritance atau beberapa penurunan
} // kalau abstrak class hanya bisa memiliki satu parent class saja

class Avanza implements Car{
    function drive(): void{
        echo "Avanza\n";
    }
    function getTire(): int{
        return 4;
    }
    function getBrand(): string{
        return "Avanza";
    }
    function IsMaintenance(): bool{
        return false;
    }
}
