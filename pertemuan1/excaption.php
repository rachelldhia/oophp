<?php


//percabangan biasa
$num = 3;

// if($num > 0){
//     echo 2 / $num;
// }else{
//     echo "Valid Number";
// }


//try cath
///try
try {
    //code
    if($num == 0){
        throw new exception('Valid Nomber');
    }
    echo 2 / $num;
}catch(Exception $e){
    echo $e->getMessage();
}


?>