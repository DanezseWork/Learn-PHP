<?php

function sum(...$numbers) { // $numbers is an array
    $total = 0;
    foreach ($numbers as $number) { // loop through the array
        $total += $number;
    }
    return $total;
}

echo sum(1, 2, 3, 4, 5) . "\n";

$arrayOfNumbers = [1, 2, 3, 4, 5];
echo sum(...$arrayOfNumbers) . "\n"; // same as sum(1, 2, 3, 4, 5), we are unpacking the array




function categories($nameOfCategory, ...$categories): void {// when void is used, you can't return something in the function   
    echo "Category: {$nameOfCategory}\n";
    foreach ($categories as $category) {
        echo " - {$category}\n";
    }
    // return "\n"; // when void is used, you can't return something in the function   
}

categories("Fruits", "Apples", "Oranges", "Bananas");

$fruits = ["Apples", "Oranges", "Bananas"];
categories("Fruits", ...$fruits);
categories("Fruits", "First Fruit", ...$fruits); // this is allowed when unpacking
//categories("Fruits", "First Fruit", ...$fruits, "Last Fruit"); // this is not allowed
