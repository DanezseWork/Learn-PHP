<?php

// declare(strict_types=1); // without this it will not throw errors(this make it scrtictly follow the types)

function add(int $a, int $b): int // declaring the type the function will use and return
{
    return $a + $b;
}

var_dump(add("1", 2));// without declaring the strict_types it will not throw an error