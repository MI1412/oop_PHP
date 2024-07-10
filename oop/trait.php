<?php
namespace Data;

trait sayGood{ // membuat trait, ini mirip seperti ekstensi yang berisi function abstrak dan function general
    function sayGood(?string $nama):void{
        if (is_null($nama)){
            echo "good\n";
        }else{
            echo "good $nama\n";
        }
    }
}
trait SayHello{
    function sayHello(?string $nama){
        echo "halo $nama\n";
    }
}
trait Hasname{
    public string $nama;
}

trait CanRun{
    public abstract function Run():void; // membuat konkret class
}