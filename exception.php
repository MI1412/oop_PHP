<?php
// exception
// menampilkan eror dalam bentuk class exception
// bisa menggunakan class exception sendiri atau sudah di sediakan oleh PHP
// untuk membuat exception kita harus implement interface Throwable atau turunan-turunannya
// tapi jarang sekali implements interface Throwable karena harus implement semua function didalamnya

// membuat exeption bisa extends dari class exception

// contoh membuat exception
// exception biasanya terjadi di function
// untuk membuat exception menggunakan kata kunci throw diikuti dengan objek exception
class ValidationException extends Exception{

}

// contoh membuat exception dengan method login request

require_once "oop/LoginRequest.php";
// ini cara membuat eror beserta validasi
function validateLoginRequest(LoginRequest $loginRequest){
    if (!isset($loginRequest->userName)){
        throw new ValidationException("user kosong");
    }elseif(!isset($loginRequest->Password)) {
        throw new ValidationException("pw kosong");
    } elseif (trim($loginRequest->userName) == "") {
        throw new ValidationException("username kosong");
    }elseif (trim($loginRequest->Password)== "") {
        throw new ValidationException("pw kosong");
    }
}
// kalau ada masalah akan menampilkan throws exception
// default throwsnya akan berhenti jika ada eror
$loginRequest = new LoginRequest();
// $loginRequest->userName = "hai";
$loginRequest->Password = "hai" ;

// try catch
// saat memanggil function yang menyebabkan exception maka disarankan menggunakan try-catch di php
// ini gunanya agar bisa menangkap exception yang terjadi, krn jika tidak ditangkap akan terjadi exception, maka secara otomatis program berhenti
// cara menggunakan try-catch php sangat mudah diblock try, kita panggil method yang menyebabkan exception dan di block catch kita bisa melakukan sesuatu jika terjadi exception
// contoh try Catch biasa

// try{
//     validateLoginRequest($loginRequest);
// } catch (ValidationException $exception){
//     echo "eror : {$exception->getMessage()}\n";
// }
// multiple try catch 1
// try {
//     validateLoginRequest($loginRequest);
// } catch (ValidationException $exception) {
//     echo "eror : {$exception->getMessage()}\n";
// }catch (Exception $exception) {
//     echo "eror : {$exception->getMessage()}\n";
// }

// disini memakai dua class ValidationException sama Exception

// multiple try catch 2
// menggabungkan beberapa eror sekaligus dengan |
// bisa menangkap beberapa jenis exception
// try{
//     validateLoginRequest($loginRequest);
// }catch(ValidationException | Exception $exception){
//     echo "eror : {$exception->getMessage()}\n";
// }

// dalam try catch bisa menambahkan block finally
// block finally adalah block dimana akan selalu dieksekusi baik terjadi exception ataupun tidak
// cocok ketika ingin melakukan sesuatu, tidak peduli sukses atau gagal, misal di block try kita ingin membaca file, di block catch kita akan tangkap jika terjadi eror dan di block finally eror ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut agar tidak menggantung di memory

try {
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
    echo "eror : {$exception->getMessage()}\n";
}finally {
    echo "kata kunci finally setelah catch akan tetap dipanggil meskipun eror atau sukses\n";
}

// Debug exception
// exception di php memiliki function getTrace() yaitu berisikan informasi dari exception yang terjadi, seperti lokasi file, baris berapa, function mana sampai argumently / beberapa argumen yang dikirim tersebut apa
// ini cocok untuk mendebug / melihat isi didalamnya exception

// berbentu array
var_dump($exception->getTrace()); // return array
// berbentuk string
echo $exception->getTraceAsString(); // return string
// cara bacanya sama seperti getTrace() berbentuk array