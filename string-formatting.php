<?php

$name = "John Doe";

$age = 30;

// printf("My name is %s and I am %d years old.", $name, $age); // this is printf, %s is for string, %d is for integer, we can pass the variables as arguments

$csv = "John,Doe,30";

$parts = explode(",", $csv); // this is explode, it splits the string into an array, the first argument is the delimiter, the second argument is the string to split

// var_dump($parts);

$csv = implode(" , ", $parts); // this is implode, it joins the array into a string, the first argument is the delimiter, the second argument is the array to join

// var_dump($csv);

$padding = str_pad("Hello", 11, "*", STR_PAD_BOTH); // this is str_pad, it adds padding to the string, the first argument is the string to pad, the second argument is the length of the whole string including your string and the padding, the third argument is the padding character, the fourth argument is the position of the padding

// echo $padding . "\n";

var_dump(trim("   Hello   "));// removes the whitespace
var_dump("   Hello   ");