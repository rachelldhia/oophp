<?php
class Mobil {
    public $nama = 'nama';
    public $merek = 'merek';
    public $warna = 'warna';
    public $tipeMesin = 'tipe Mesin';
    public $kecepatanMaksimal = 'Kecepatan Maksimal';

    public function tambahKecepatan(){

    }
    public function kurangiKecepatan(){
        
    }

    public function belokKiri(){
        
    }
    public function belokKanan(){
        
    }
    public function sayHello(){
        return "Hello";
        
    }
    public function getLable(){
        return "$this ->nama, $this ->merek";
        
    }

}

$mobil_gavi = new Mobil();
$mobil_gavi ->nama = "Lamborghini Aventador";
$mobil_gavi ->merek = "Lamborghini";
$mobil_gavi ->warna = "kuning";
$mobil_gavi ->kecepatanMaksimal = "20000";

// echo $mobil_gavi ->nama, $mobil_gavi ->merek, $mobil_gavi ->warna, $mobil_gavi ->kecepatanMaksimal; 

echo $mobil_gavi ->sayHello();
echo $mobil_gavi ->getLable();


$mobil_neymar = new Mobil();

var_dump($mobil_gavi);
?>