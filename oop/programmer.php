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
class company{
    public programmer $programmer;
    public BackEnd $backEnd;
    public FrontEnd $frontEnd;
}

function sayHalo(programmer $programmer)
{
    if ($programmer instanceof BackEnd) {
        echo "halo BackEnd $programmer->nama\n";
    } else if ($programmer instanceof FrontEnd) {
        echo "halo frontend $programmer->nama\n";
    } else if ($programmer instanceof programmer) {
        echo "halo programmer $programmer->nama\n";
    } else {
        echo "bukan programmer";
    }
}