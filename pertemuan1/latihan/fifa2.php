<?php
class Fifa{
    private $namaNegara;
    private function supporter(){
        return "Ayo pasti menang";

    }
    public function country($namaNegara){
        $this ->namaNegara =$namaNegara;
    }
    public function getPrivate(){
        return $this ->namaNegara. "". $this ->supporter();
    }
}
$fifa = new Fifa();
echo $fifa -> country("argentina");
echo "<br>";
echo $fifa -> getPrivate();
?>