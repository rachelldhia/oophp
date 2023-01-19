<?php

namespace OOPHP\negara;
class Jepang{
    public $ibukota;
    public $bahasa;
    
    
    public function ibukota($ibukota){
        echo"Ibu Kota Tokyo";
        $this->ibukota=$ibukota;
        return $this->ibukota;
    }
    public function bahasa($bahasa){
        echo"Bahasa Jepang";
        $this->bahasa=$bahasa;
        return $this->bahasa;
    }
   
}

?>