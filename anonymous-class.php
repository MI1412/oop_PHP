<?php
// anonymous class
// anonymous class atau class tanpa nama
// kemampuan mendeklarasikan class, sekaligus membuat objeknya secara langsung
// anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi interface atau abstract class sederhana, tanpa harus membuat implementasi classnya
// contoh
interface halo{
    function sayHalo():void;
}
// biasanya untuk menerapkan interface begini
// class sample implements halo{
//     function sayHalo():void{
//         echo "halo sample";
//     }
// }
// $sample = new sample;
// nah kalau begini kan agak panjang baris codenya padahal implementasi dari interface sangat sedikit maka disarankan menggunakan anonymous class seperti dibawah ini
$sample = new class implements halo{
    function sayHalo(): void
    {
        echo "sampel halo di anonymous class\n";
    }
};
$sample->sayHalo(); // kalau implementasi dari interface memang banyak maka disarankan untuk membuat class

// anoymous constructor class
// anonymous class juga mendukung constructor
// jadi kita bisa menambahkan constructor jika kita mau
// contoh anoymous constructor
$halo = new class('imron') implements halo{
    private string $nama;
    public function __construct(string $nama){
        $this->nama = $nama;
    }
    function sayHalo(): void
    {
        echo "halo $this->nama\n";
    }
};
$halo->sayHalo();