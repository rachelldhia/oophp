<?php

function faktorial($n){

    echo"faktorial({$n}) = faktorial(" . ($n- 1) . ")\n";

    if ($n > 2){
        faktorial($n- 1);
    }
}

faktorial(5);

?>