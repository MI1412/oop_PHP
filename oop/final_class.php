<?php
class Social_media{
    public string $nama;
}
  final class facebook extends Social_media{ // menutup penurunan dari class facebook menggunakan final
  final function login(string $user, string $pw):void{ // final function untuk menutup function agar tidak bisa dioverride 
    echo $user, $pw . PHP_EOL;
  }
}

// class fakeFacebook extends facebook{ // ini akan eror karena sudah ditutup penurunannya
// function login ():void{ ini eror karena pada function login sudah ditutup jadi tidak bisa dioverride
  
// }
// }