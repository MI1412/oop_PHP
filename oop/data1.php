<?php
class Data1 implements IteratorAggregate{
    var string $first = 'first';
    public string $second = 'second';
    private string $third = 'third'; // ini tidak bisa dipakai foreach
    protected string $fourth = 'fourth'; // ini juga tidak bisa dipakai foreach
    public function getIterator(){
        // dengan implementasi iterator maka dapat melakukan perulangan tanpa harus manual menggunakan index
        // ketika kita membuat function ini maka function yang visibility protected dan private akan diambil semua
        // $array = [ // melakukan perulangan yang kita inginkan
        //     // misal jika ada password dalam properti maka kita cukup tidak menambahkannya disini
        //     "first"=> $this->first,
        //     "second"=> $this->second,
        //     "third"=> $this->third,
        //     "fourth"=> $this->fourth
        // ];
        // juga bisa menggunakan yield ->
            yield "first"=> $this->first;
            yield "second"=> $this->second;
            yield "third"=> $this->third;
            yield "fourth"=> $this->fourth;

        // return new ArrayIterator($array);
    }
}
$data = new Data1;
foreach ($data as $kunci => $nilai) { 
    echo "$kunci : $nilai\n";
}

