<?php

$numbers = [1, 2, 3];
$times = 5;

$result = array_map(function ($num) { return $num * 2; }, $numbers); // this is a anonymous function that can't use $times unlese we include use keyword

$result2 = array_map(fn ($num) => $num * $times, $numbers);// this is a arrow function can use variable from parent scope, without using any keyword

var_dump($result, $numbers);
var_dump($result2, $numbers);