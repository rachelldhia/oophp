<?php

class Cuaca extends Exception{}

$c = 21;

function exception_handler($exception){
    echo "Suhu Cuaca Kali Ini: ", $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');


try {
    //code
    if($c < 21){
        throw new exception('Hujan siapkan payung!');
    }elseif($c > 30){
        throw new exception('Panas Gunakan Sunscream');

    }else{
        throw new exception('Cuaca Normal');
    }
}catch(Cuaca $e){
    echo $e->getMessage();
}

?>