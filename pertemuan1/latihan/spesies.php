<?php
class Spesies{
    function namaHewan(){
        echo "Anjing";
    }
    function jenis(){
        echo"Mamalia";
    }
}


class Hewan extends Spesies{
    function jenis(){
        echo "hidup";
    }
}

$hewan = new Spesies;
$hewan->namaHewan();
echo"\n";
$hewan->jenis();
echo"\n";
$hewan = new Hewan;
$hewan->jenis();
?>