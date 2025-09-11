<?php

function pureFunction($a) {
    return $a += $a;
}
//pure functions are consistent, testable, reusable, and can be cached

$global_var = 5;

function impureFunction($a) {
    global $global_var;
    $global_var += $a;
    return $global_var;
}
//this impure function will modify the global variable, which is called a side effect

var_dump(pureFunction(5), pureFunction(3), impureFunction(5), impureFunction(3));