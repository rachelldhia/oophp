<?php

class Fifa{
    public $namaNegara;
    public function supporter(){
        return "ayo pasti menang";

    }
}
$fifa = new Fifa();
echo $fifa -> namaNegara = "Brazil";
echo "<br>";
echo $fifa -> supporter();
?>