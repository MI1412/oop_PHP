<?php

class Manajer{
    var string $nama;
    var string $tittle;

    public function __construct(string $nama, string $tittle = "manager"){
        $this->nama = $nama;
        $this->tittle = $tittle;
    }
    public function sayNama(string $nama){ // memakai kata kunci void artinya tidak mengembalikan value
        echo "hai $nama, aku adalah manajer $this->nama\n";
    }

    public function info(): void
    {
        echo "Nama : $this->nama\nTittle : $this->tittle\n";
    }
}
class Founder extends Manajer{
    // mengambil properties dan function dalam super class manajer

    public function __construct(string $nama){
        parent::__construct($nama,'Founder'); // constructor overriding
    }
    public function sayNama(string $nama){
        echo "halo $nama, namaku adalah founder $this->nama\n"; // mengoverride nama function sebelumnya
    }
    public function getParentManager($nama){
        return parent::sayNama($nama); // mengakes function di parent setelah terlanjur di override
    }
}
