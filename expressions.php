<?php

// echo or printing out to terminal
echo "Welcome to PHP\n";

// variable
$name = "John";

echo "My name is {$name}\n";

// concatenation
echo "My name is " . $name .  "\n";


$days = 365;
$years = 5;
// arithmetic
$daysInFiveYears = $days * $years;

echo "There are " . $daysInFiveYears . " days in 5 years\n";

// boolean

$paid = false;

echo "Paid?\n";
echo $paid ? "yes" : "no\n";