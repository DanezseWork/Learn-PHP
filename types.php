<?php

// type coercion, 1 == true, any number that is non-zero is true, if === it will be false
$isTrue = 1;
var_dump($isTrue, true, $isTrue == true);


// numbers where coerced or juggled to be added as numbers, php will use which type is most appropriate
$numbers = [5, "10", 2.2];
var_dump($numbers[0] + $numbers[1] + $numbers[2]);

// you can also explicitly cast the type of a variable to a different type
$someVariable = (int)"5";
var_dump($someVariable);

$total = $numbers[0] + $numbers[1] + $numbers[2];

// you can display variables and special characters in "" but not in ''
echo "Total: $total\n";