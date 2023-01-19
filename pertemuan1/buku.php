<?php

class Buku{
    public $judul= "judul";
    public $penulis= "penulis";
    public $penerbit= "penerbit";
    public $harga= 0;



    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function __destruct()
    {
        echo"distruct di jalankan";
    }

    public function getLable(){
        return "$this->penulis, $this->penerbit";
    }

}

$buku1 = new Buku("Atomic Habit", "James Clear", "Penguin Rbdom House", 100000);
// $buku1->judul = "Atomic Habit";
// $buku1->penulis = "James Clear";
// $buku1->penerbit = "Penguin Rbdom House";
// $buku1->harga = 100000;


$buku2 = new Buku("Insecurity", "Alvi Syahrin", "Alvi Ardi Publishing", 990000);
// $buku2->judul = "Insecurity";
// $buku2->penulis = "Alvi Syahrin";
// $buku2->penerbit = "Alvi Ardi Publishing";
// $buku2->harga = 990000;

echo "Buku : " . $buku1->getLable();
echo"<br>";
echo "Buku : " . $buku2->getLable();




?>