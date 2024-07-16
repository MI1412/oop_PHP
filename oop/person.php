<?php

namespace Person{ // tambahkan namespace kurung kurawal untuk membuat satu class atau beberapa class
    class Person{
        const AUTHOR = "MI1412"; // Variabel Constanta / variabel tetap
        var ?string $nama; // properti
        var string $alamat; // properti
        private string $sample;
        public function setSample(string $sample){
            $this->sample = $sample;
        }
        public function __clone(){ // membuat modifikasi hasil dari cloningan objek
            unset($this->sample); // unset properties $sample sehingga hasilnya tidak ada ketika diclone
        }
        function info()  // contoh penggunaan self
        {
            $author = self::AUTHOR; // mengakses class menggunakan self
            echo "nama : $this->nama\nalamat : $this->alamat\nAUTHOR : $author\n";
        }
        function __construct(string $nama, string $alamat){ // constructor adalah menginit properti
        $this->nama = $nama; // this adalah digunakan untuk mengakses objek saat ini
        $this->alamat = $alamat;
        }
        function sayNama(string $nama):void{
            echo "Hai $nama, nama saya $this->nama\n"; // this mengakses objek saat ini
        }
        function __destruct(){ // destruction adalah menghapus progrom ketika tidak digunakan
        echo "\nobjek orang $this->nama sudah dihapus\n";
        }
    }
    class Contoh{
        var string $nama;
        var string $alamat;
        
        function __construct($nama, $alamat){
            $this->nama = $nama;
            $this->alamat = $alamat;
        }
    }
}