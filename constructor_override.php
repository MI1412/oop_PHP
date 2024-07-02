<?php
// constructor override
// karena constructor sama seperti function, maka constructor pun bisa dideklarasikan ulang di class childnya
// sebenarnya diphp kita bisa mengaoverride function dengan arguments yang berbeda namun sangat tidak disarankan
// jika kita melakukan override function dengan arguments berbeda, maka php akan menampilkan warning
// namun berbeda dengan constructor override, kita boleh meng-override dengan mengubah argumentsnya, namun direkomendasikan untuk memanggil parent constructor
// contoh
require_once "oop/manager.php";
$manajer = new Manajer('Asep');
$founder = new Founder('ucup');
$info_manager = $manajer->info();
$info_founder = $founder->info();
