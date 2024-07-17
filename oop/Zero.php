<?php
class Zero{
    // private array menyimpan data
    private array $properties = [];
    public function __get($name){
        return $this->properties[$name]; // memasukkan objek saat ini ke array properties
        // echo "akses properties $name\n"; // mengakses properties yang belum ada
    }
    public function __set($name,$value){
        $this->properties[$name] = $value; // set objek saat ini ke array dengan value saat ini
        // echo "function bernama set, akses $name dengan $value\n"; // akses properti dan value ketika mengubah properties yang tidak tersedia
    }
    public function __isset($name):bool{
        return isset($this->properties[$name]); // validasi properties dari data array
        // echo "isset properties $name";
        // return false;
        // return isset($this->properties[$name]);
    }
    public function __unset($name){
        unset($this->properties[$name]); // unset / hapus properties wadah ke properties
        // echo "unset properties $name";
    }
    public function __call($method, $args){
        $join = join(',', $args);
        echo "call function $method with arguments $join\n";
    }
    public static function __callStatic($method, $args){
        $join = join(',',$args);
        echo "call static function $method with arguments $join\n";
    }
}