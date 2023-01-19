<?php
class Hanphone{
    public $jumlah_pulsa;

    public function __construct($pulsa)
    {
        $this->jumlah_pulsa = $pulsa;
    }

    public function mengirimPesan($tarif, $jumlah_pesan = 1){
        $this->jumlah_pulsa -= $tarif*$jumlah_pesan;
    }

    public function __destruct()
    {
        echo"Jumblah Pulsa Sekarang :";
        echo $this->jumlah_pulsa;
    }
}

$hp_rachel = new Hanphone(5000);

echo "Jumblah Pulsa Rachel Diawal";
echo $hp_rachel->jumlah_pulsa;

$hp_rachel->mengirimPesan(200);
?>