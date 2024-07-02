<?php
// visibility
// visibility / acces modifier adalah kemampuan properties, function, dan constant dapat diakses dari mana saja
// secara default properties, function, constant yang kita buat didalam class bisa diakses darimana saja atau artinya dia adalah public
// selain public, masih ada beberapa visibility lainnya
// secara default kata kunci var untuk properties adalah sifatnya public

// level akses : akses yang ada
// public : class, subclass, global
// protected : class, subclass
// private : class

// contoh
class product{
    private string $nama; // tingkat akses private
    private int $harga; // tingkat akses private
    protected const PABRIK = "Indofood";
    public function __construct(string $nama, int $harga) // tingkat akses publik
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }
    public function info($pembeli):void{ // tingkat akses publik
        echo "\nnama \t: $this->nama\nharga \t: $this->harga\npembeli : $pembeli\npabrik \t: ".self::PABRIK. PHP_EOL;
    }
    public function __destruct(){
        echo "objek $this->nama telah dihapus\n";
    } // tingkat akses private
}
class namaPabrik extends product{
    public function infoPabrik():void{
        echo "dari class nama pabrik : ".self::PABRIK. PHP_EOL;
    }
}


$indomie = new product('indomie',4000);
$info = $indomie->info('imron');
echo $info;
// ketika coba akses properti nama
// $nama_product = $indomie->nama; eror kerena properti nama bersifat private yang artinya hanya bisa diakses dalam class

$milo = new product('milo',5000);
$info = $milo->info('asep');
echo $info;

$namaPabrik = new namaPabrik('mixue','1000');
$info = $namaPabrik->infoPabrik();
echo $info;