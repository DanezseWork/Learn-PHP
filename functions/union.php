<?php
declare(strict_types=1);

// this allows multiple types to be passed into a function
function multi_types(int|string|float|bool $value){
    return match(true){
        is_int($value) =>"int",
        is_string($value) => "string",
        is_float($value) => "float",
        is_bool($value) => "bool",
        default => "unknown"
    };
}


// an array with mixed types
$types_array = ["hello", 1, 1.1, true, false];

// loop through the array and using the multi_types function
foreach($types_array as $value){
    echo multi_types($value) . "\n";
}