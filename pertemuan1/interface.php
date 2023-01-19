<?php
interface Buah{
    public function makan();
    public function setWarna($warna);
}

interface Benda{
    
}

class Apple implements Buah{
    protected $warna;
    protected $ukuran; //properti ruang lingkup kelas

    public function makan(){

    
    }

    public function setWarna($warna){
        $this->warna = $warna;
    }
//yang dipanggil variable
    public function setUkuran($ukuran){
        $this->ukuran = $ukuran;
    }
}

?>