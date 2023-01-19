<?php

class fifa {

    //parent class
    protected $namaNegara = "Prancis";

    protected function supporter(){
        return "ayo pasti menang";
    }
}

//membuat kelas warisan/child class
class Mobile extends Fifa{
    public function support(){
        return $this->namaNegara. " " . $this->supporter();
    }
}

$fifa = new fifa();
echo $fifa->supporter();
?>