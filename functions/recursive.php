<?php

function recursiveFunction($n) {
    if ($n > 0) {
        echo $n . "\n";
        recursiveFunction($n - 1);
    } elseif ($n < 0) {
        echo $n . "\n";
        recursiveFunction($n + 1);
    }
    // the function will keep calling itself until the condition is false, in this case when $n is 0
}
//this is a recursive function, which means that it calls itself

recursiveFunction(-5);