<?php

class Mobil2 {

    //parent class
    protected $namamerek = "tesla";

    protected function hellomobil(){
        return "dari kelas mobile";
    }
}

//membuat kelas warisan/child class
class Mobile extends Mobil2{
    public function getmobil(){
        return $this->namamerek. " " . $this->hellomobil();
    }
}

$mobile2 = new Mobile();
echo $mobile2->getmobil();
?>