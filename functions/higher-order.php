<?php

$user_data = [
    ['name' => 'John', 'age' => 30, 'city' => 'New York'],
    ['name' => 'Jane', 'age' => 25, 'city' => 'London'],
    ['name' => 'Bob', 'age' => 35, 'city' => 'Paris']
];

function filterData($key, $value) {
    return fn($item) => $item[$key] === $value;
}

var_dump( array_filter($user_data, filterData('age', 30)));// array_filter is a higher order function, since it takes a function as an argument

// Higher Order Funcitons Guide

// 1. Accepts a function as an argument

function repeatNTimes($n, callable $action) {
    for ($i = 0; $i < $n; $i++) {
        $action($i); // call the passed-in function
    }
}

// Example: pass "echo" wrapped in a closure
repeatNTimes(3, function($i) {
    echo "Iteration: $i\n";
});


// 2. Returns a function
function multiplier($factor) {
    return function($x) use ($factor) {// note how we return the whole function, not just calling it
        return $x * $factor;
    };
}

$double = multiplier(2); 
echo $double(5); // 10