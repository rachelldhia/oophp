<?php

use Mobil as GlobalMobil;

class Mobil{
    private $namaMerek;
    private function halo(){
        return "dari kelas mobil";

    }
    public function setmerk($namaMerek){
        $this ->namaMerek =$namaMerek;
    }
    public function getPrivate(){
        return $this ->namaMerek. "". $this ->halo();
    }
}
$mobile = new Mobil();
echo $mobile -> setmerk("tesla");
echo "<br>";
echo $mobile -> getPrivate();
?>