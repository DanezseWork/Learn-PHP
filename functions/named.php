<?php

function greet(string $name, string $emotion = "happy", int $times = 1, bool $loud = false): string {
    $greeting = "Are you $emotion $name?";
    if ($loud) {
        $greeting = strtoupper($greeting);
    }
    for ($i = 0; $i < $times; $i++) {
        echo "$greeting\n";
    }
    return $greeting;
}

// calling the function by order of arguments
greet("John");
greet("John", "confused");
greet("John", "disappointed", 3);
greet("John", "sad", 2, true);

// calling the function by name of arguments
greet(times: 3, loud: true, name: "Bob", emotion: "excited");
greet(loud: true, name:"Dan");// you can skip the arguments that have default values