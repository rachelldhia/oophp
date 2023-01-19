<?php
trait order1{
    public function pesanan1(){
        echo "Pesanan ini berhasil di pesan dan akan segera di kirim";
    }
}

trait order2{
    public function pesanan2(){
        echo"Pesanan ini dibatalkan dan akan segera dikembalikan";
    }
}
trait order3{
    public function pesanan3(){
        echo"Pesanan ini dibeli kembali oleh user 123";
    }
}

class Order{
    use order1;
}

class Pesanan{
    use order1, order2;
}
class Orderan{
    use order1, order2, order3;
}

$so = new Order();
$so->pesanan1();
echo"<br>";

$so = new Pesanan();
$so->pesanan1();
$so->pesanan2();
echo"<br>";

$so = new Orderan();
$so->pesanan1();
$so->pesanan2();
$so->pesanan3();





?>