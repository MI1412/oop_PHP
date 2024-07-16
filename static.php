<?php
// static keyword
// kata kunci static adalah keyword yang bisa kita gunakan untuk membuat properties atau function di class bisa diakses secara langsung tanpa menginstansiasi class terlebih dahulu / membuat contoh class dulu
// namun ingat saat kita buat static properties atau function, secara otomatis hal itu tidak akan berhubungan lagi dengan class instance yang kita buat
// untuk cara mengakses static properties dan function sama seperti mengakses constant, kita bisa menggunakan operator ::
// static function tidak bisa mengakses function biasa, karena function biasa menempel pada class instance sedangkan static function tidak
// contoh
class Math{
    static public string $nama = "MATH"; // ketika mencoba mengakses properti ini tidak bisa sebagai objek tapi sebagai class
    static public function sum(int ...$angka): int{ // membuat function static
        $total = 0;
        foreach ($angka as $angka){
            $total += $angka;
        }
        return $total;
    }

    static function getGanjil(int $max):Iterator{ // saat memakai iterator generator gunakan iterator untuk mengembalikan tipe data iterator
        for($i = 0; $i<= $max; $i++){ // fase pembuatan iterator
            if ($i % 2 == 1){
                yield $i; // ini akan mengembalikan nilai generator tanpa membuat iterator / array lagi
                // kalau butuh key dan value, contoh dibawah
                // yield 'key'=>'value';
            }
        }
    }
    static function getGenap(int $max){
        $array = [];
        for ($i = 1;$i<=$max; $i++){
            if ($i%2 == 0){
                $array[] = $i;
            }
        }
        return new ArrayIterator($array);
    }
}
echo Math::$nama. PHP_EOL;

// static function
// berguna saat membuat function tanpa harus membuat objek dahulu
// contoh
$total = Math::sum(); // akses static function
echo "total $total\n";
