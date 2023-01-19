<?php

class shape{
    function __call($name_function, $arguments)
    {
        if($name_function == "area"){
            switch (count($arguments)){
                case 1 : 
                    return 3.14 * $arguments[0];

                    case 2 :
                        return $arguments[0]* $arguments[1];
            }
        }
    }
}

$shape = new Shape;
echo($shape->area(2));
echo"\n";

echo($shape->area(4, 2));
?>