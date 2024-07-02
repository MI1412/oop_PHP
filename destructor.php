<?php
// destructor
// jika constructor adalah function yang akan dipanggil ketika objek dibuat
// destructor adalah function yang akan dipanggil ketika objek dihapus dari memory
// biasanya ketika objek tersebut sudah tidak lagi digunakan atau ketika aplikasi akan mati
// untuk membuat function destructor, kita bisa menggunakan nama function __destruct()
// khusus untuk destructor, kita tidak boleh menambahkan function argument
// dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke database atau menutup proses menulis ke file, sehingga tidak terjadi memory leak
// saat membuat koneksi kedatabase setelah database tidak digunakan lagi maka koneksi ke database akan ditutup biar tidak ada kebocoran data
// contoh destructor

require_once "oop/person.php";
$imron = new Person('imron','surabaya');
$amir = new Person('amir','surabaya');

// var_dump($imron);
echo "program selesai\n"; // setelah program selesai destruction akan auto terpanggil untuk menghapus memory dari function destructor
$nama = $imron->nama;
function cekNama($input){
        if (is_null($input)){
            echo "objek kosong\n";
        }else{
            echo "objek $input ada\n". gettype($input);
        }
    }
// cekNama($nama);
// unset($nama);
// var_dump(is_null($nama));