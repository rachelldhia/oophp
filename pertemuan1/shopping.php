<?php
class Shopping {
    public $nama = "nama";
    public $barang = "barang";
    public $warna = "warna";
    public $ukuran = "ukuran";
    public $jumlah = "jumlah";
    public $toko = "toko";

    public function beli(){

    }
    public function jual(){
        
    }
    public function Pembayaran(){
        
    }
    public function antarBarang(){
        
    }
    public function COD(){
        
    }
    
    public function welcomeToUser(){
        return "Hello User Happy Shopping";
        
    }
    public function getBarang(){
        return "$this->barang";
        
    }

}

$Shopping_user1 = new Shopping();
$Shopping_user1 ->nama = "Asrahan";
$Shopping_user1 ->barang = "Baju Gucchi";
$Shopping_user1 ->warna = "hitam gradasi coklat";
$Shopping_user1 ->ukuran = "XL";
$Shopping_user1 ->jumlah = "5";
$Shopping_user1 ->toko = "Gucchi";



echo $Shopping_user1->welcomeToUser();
echo $Shopping_user1->getBarang();

var_dump($Shopping_user1);
?>