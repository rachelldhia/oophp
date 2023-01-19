<?php

include ("negara/jepang.php");
class Jepang{
    public $jepang;
    public function __construct()
    {
        $this->jepang=new \OOPHP\negara\Jepang;
        echo "Ibukota" . $this->jepang->ibukota("Tokyo");
        echo "\n";
        echo "Bahasa" . $this->jepang->bahasa("jepang");
    }

}

$jepang= new Jepang();

?>