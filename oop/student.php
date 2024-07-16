<?php
namespace Student;
class Student{
    public string $id;
    public string $nama;
    public string $nilai;
    public function __tostring():string{
        return "student id : $this->id\nnama : $this->nama\nnilai : $this->nilai\n";
    }

    public function __invoke(...$arguments){
        $join = join(',',$arguments);
        echo "invoke students with arguments $join\n";
    }
    function __debugInfo():array
    {
        return[
            'id'=>$this->id,
            'nama'=>$this->nama,
            'nilai'=>$this->nilai,
            'author'=>'imron',
            'version'=>'1.9'
        ];
    }
}