<?php
class siswi{
    function biodata(){
        echo "Rachel Dhia";
    }
    function ttl(){
        echo"Lahir di Bekasi, 25 Februari 2006 \n";
    }
}


class Mahasiswi extends siswi{
    function ttl(){
        echo "Selamat Anda LOLOS di UGM";
    }
}

$siswi = new siswi;
$siswi->biodata();
$siswi->ttl();
$siswi2 = new Mahasiswi;
$siswi2->ttl();
?>