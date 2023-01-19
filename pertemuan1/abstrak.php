<?php
 abstract class Mobil{

    public $setharga;

    abstract function spec();


    public function setHarga($setharga){
        $this->setHarga($setharga);
    }
 }

 class Pajero extends Mobil{
    function spec()
    {
        $nama = "Nama Mobil : Pajero";
        $kapasitas = "Kapasitas 7 orang";
        echo $nama;
        echo"\n";
        echo $kapasitas;
    }
 }

 $pajero = new Pajero();
 $pajero->spec();
 

?>
