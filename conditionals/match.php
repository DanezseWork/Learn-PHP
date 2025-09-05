<?php

$number = 2;
// $number = "2"; // will throw 'Unknown value'

$oddOrEven = match($number){
    2, 4, 6, 8 => 'Even',
    1, 3, 5, 7, 9 => 'Odd',
    default => 'Unkown value'
};

echo "{$oddOrEven} is the value.";

// match is only for php 8.0+
// match uses ===, so 8 and "8" is not the same 