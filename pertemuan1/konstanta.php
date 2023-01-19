<?php
//konstanta

//Devine()
// define('NAMA', 'Rachel');
// echo NAMA;

//konstanta contoh

class Laptop{
    const DOLLAR = 14000;


    public function belilaptop($harga){
        return "Beli Laptop Baru Rp. " . $harga*self::DOLLAR; 
    }
}
//akses konstanta lewat objek 
$laptop_baru = new Laptop();
echo $laptop_baru ->belilaptop(5000000);

//class
echo Laptop::DOLLAR;

echo __Line__;

function coba(){
    return __FUNCTION__;
}

echo coba();

echo __FILE__;

?>