<?php
namespace { // secara default akan membuat namespace secara global karena tidak diberi nama
    const AUTHOR = "YAYAYAYA";
    function helpMe():void{
        echo "\nHelp Me\n";
    }
}

namespace Hai{
    const AUTHOR = "Imron";
    const APP = "1.9";
    function Info():void{
        $author = AUTHOR;
        echo 'hai '.$author.PHP_EOL;

    }
    function APP():void{
        $app = APP;
        echo "versi $app";
    }
}