<?php

class Mobil{
    public $namaMerek;
    public function halo(){
        return "dari kelas mobil";

    }
}
$mobile = new Mobil();
echo $mobile -> namaMerek = "tesla";
echo "<br>";
echo $mobile -> halo();
?>