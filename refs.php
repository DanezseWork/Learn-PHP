<?php

$var_one = "Hello";
$var_two = &$var_one; // reference to var_one

var_dump($var_one, $var_two);

$var_one = "World";
var_dump($var_one, $var_two);

$var_two = "Goodbye";
var_dump($var_one, $var_two);

$original = 2;

function increment(int &$num) {
    $num++;
    return $num;
}

increment($original);

var_dump($original);
var_dump(increment($original));