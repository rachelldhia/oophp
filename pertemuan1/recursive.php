<?php

// function iteration(int $num, int $index= 1){
//     echo "prosess ke-{$index}\n";


//     if ($index< $num){
//         iteration($num , $index + 1);
//     }
// }
// iteration(10);


function iteration(int $num){
    for ($i = 1; $i <= $num; $i++){
        echo "perulangan ke-{$i}\n";
    }
}

iteration(10);

?>