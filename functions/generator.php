<?php
// Example 1: Without generators
function countDown($start) {
    $result = []; // we must build and store the entire array in memory first
    for ($i = $start; $i > 0; $i--) {
        echo "Generating $i\n"; // happens immediately during the loop
        $result[] = random_int(1, 100); // store each random number in the array
    }
    return $result; // only after the full array is built do we return it
}

// Notice: the foreach loop will only start AFTER the entire array is created
foreach (countDown(5) as $value) {
    echo "Echoing Random Number: $value\n";
}


echo "\n--- Using a Generator ---\n\n";

// Example 2: With generators
function countDownGenerator($start) {
    for ($i = $start; $i > 0; $i--) {
        echo "Generating $i\n"; // runs each time the generator yields
        yield random_int(1, 100); // yield returns one value at a time
        // then pauses here until the next foreach step
    }
}

// Notice: the foreach loop starts immediately.
// Each "Generating..." and "Echoing..." happen in sequence
foreach (countDownGenerator(5) as $value) {
    echo "Echoing Random Number: $value\n";
}


// in summary, generators are great if you a working with large data sets and you want memory efficiency.