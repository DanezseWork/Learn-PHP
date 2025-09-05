<?php

$num = 8;

if ($num > 5) {
    echo "Greater than 5";
    if ($num % 2 == 0) {
        echo " and even";
    } else {
        echo " and odd";
    }
} else {
    echo "Less than 5";
}

// if there is only one statement to execute, you can omit the {}, but it is more ideal to use {}
if ($num > 5)
    if ($num % 2 == 0)
        echo " and even";
    else
        echo " and odd";
else 
    echo "Less than 5";