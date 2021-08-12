<?php

// PHP program to print the multiplication table of any integer number by using the for loop

$x = 1;
$r = 2;

echo "----The input number is: ", $x, "\n <br/>";

echo "\n----The range number is: ", $r, "\n <br/>";

// $x - denotes input number
// $r - denotes multiplication range

echo "\n\n----The above multiplication table--------\n\n <br/> <br/>";

for ($i = 1; $i <

= $r; $i++) {
    echo "\t", $x, " * ", $i, " = ", $x * $i, "\n","<br/>";
}
    
?>