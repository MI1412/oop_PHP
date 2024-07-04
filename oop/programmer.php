<?php
// contoh polimorfisme
class programmer{
    public string $nama;
    public function __construct(string $nama){
        $this->nama = $nama;
    }
    
}

class BackEnd extends programmer{
    
}

class FrontEnd extends programmer{

}
function sayHaloProgrammer(programmer $programmer)
{ // polimorfisme dalam function
    echo "halo $programmer->nama\n";
}
function sayHaloFE(FrontEnd $FE){
        echo "halo $FE->nama\n";
    }
function sayHaloBE(BackEnd $BE){
    echo "halo $BE->nama\n";
}