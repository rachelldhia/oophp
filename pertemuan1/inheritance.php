<?php
class Langit{
    public $nama;

    public $cahaya;

    public function __construct($nama, $cahaya){
        $this->nama = $nama;
        $this->cahaya = $cahaya;
    }

    public function namaBintang(){
        echo "Contoh nama bintang yaitu {$this->nama} dan warnanya {$this->cahaya}";
    }
   
    
}
class Bintang extends Langit{

    public function pesan(){
        echo "Benda-benda langit";
    }
}

$bintang = new Bintang("Canopus, capella, vega, sirius", "terang");
$bintang-> pesan();
$bintang->namaBintang();

?>