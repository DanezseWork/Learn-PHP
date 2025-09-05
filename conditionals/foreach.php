<?php

// $people = ["John"=> 15, "Jane" => 21, "Bob" => 30, "Alice" => 12, "Mark" => 18];

// $people = [
//     ["name" => "John", "age" => 15],
//     ["name" => "Jane", "age" => 21],
//     ["name" => "Bob", "age" => 30],
//     ["name" => "Alice", "age" => 12],
//     ["name" => "Mark", "age" => 18],
// ];

$people = [
    ["John", 15],
    ["Jane", 21],
    ["Bob", 30],
    ["Alice", 12],
    ["Mark", 18],
];


$totalAgeOfGroup = 0;

// foreach ($people as $pi) {
//     echo $pi['age']  . "old\n";
//     // $totalAgeOfGroup += $age;
// }

foreach ($people as $pi) {
    echo $pi[0]  . " old\n";
    // $totalAgeOfGroup += $age;
}

// echo "The sum of the ages of the group is " . $totalAgeOfGroup . "\n";
// echo "The average age of the group is " . $totalAgeOfGroup / count($people);