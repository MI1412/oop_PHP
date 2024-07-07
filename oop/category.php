<?php
class Category{
    // properti private akan melakukan enkapsulasi agar datanya aman dan bersih
    private string $nama;
    private bool $harga;
    public function getNama():string{ // mengambil nama dari encapsulasi mengembalikan nilai string
        return $this->nama;
    }
    public function setNama(string $nama):void{ // mengatur nama variabel dari properti yang sudah dienkapsulasi atau bisa ditambahkan validasi agar lebih aman lagi
        // $this->nama = $nama;
        if (trim($nama)!=""){
            $this->nama = $nama;
        }else{
            echo "ga ada isi\n";
        }
    }
    public function isHarga():bool{ // mengembalikan boolean
        return $this->harga;
    }
    public function setHarga(bool $harga):void{
        $this->harga = $harga;
    }
}