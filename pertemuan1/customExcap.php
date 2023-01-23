<?php

// class CustomExcaption extends Exception{
//     //definisi
//     public function __construct($exmsg, $val = 0, Exception $old = null)
//     {
//        $exmsg = 'Default';
//        parent:: __construct($exmsg, $val, $old);
//     }

//     public function __toString()
//     {
//         return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
//     }
// }


class MyException extends Exception{}

function exception_handler($exception){
    echo "pesan dari tempat magang : ", $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');

try{
    throw new Exception('kirim cv');
}catch(MyException $e){
    echo "Ayo Pasti Bisa Keterima";
    echo $e->getMessage();
}finally{
    echo "Dan Jadi Kaya Sekaligus Kejar Tujuan";
}

?>
