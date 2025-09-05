<?php

$global_var = "Hello";

function useGlobal() {
    global $global_var;
    // $global_var = "Goodbye"; // this can modify the global variable, which can be dangerous
    echo $global_var . "\n";
}

useGlobal();

// echo $global_var . "\n"; // will print the new value if changed in the function

function staticScope() {
    static $static_var = 1; // static here means that the variable will remember its value between function calls, without the static it will be reset
    $static_var++;
    echo $static_var . "\n";
}

staticScope();
staticScope();
staticScope();