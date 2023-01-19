<?php
trait message1{
    public function msg1(){

        echo "OOP is Fun";
    }

}
trait message2{
    public function msg2(){

        echo "OOP reduces code duplicated";
    }
    
}

class Welcome{
    use message1;
}
class Welcome2{
    use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo"<br>";

$obj = new Welcome2();
$obj->msg1();
$obj->msg2();


?>