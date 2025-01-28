<?php
// Overloading is done with help of the function __call()
class Shapes {
    function __call($name_of_function, $arguments) {
        if($name_of_function == 'area') {
            switch (count($arguments)) {
                case 1:
                    return 2*$arguments[0];
                case 2:
                    return ($arguments[0]*$arguments[1]);
            }
        }
    }
}
$shape = new Shapes;
echo ($shape->area(7)) . "<br>";
echo ($shape->area(5,3));
?>