<?php

$color = "blue";

switch($color){
    case "red":
    case "blue":
        echo "red or blue switch\n";
        break;
    case "yellow":
    case "green":
        echo "yellow or green switch\n";
        break;
    default:
        echo "unknown switch\n";
        break;
}

if ("red" == $color || "blue" == $color) {
    echo "red or blue if\n";
} elseif ("yellow" == $color || "green" == $color) {
    echo "yellow or green if\n";
} else {
    echo "unknown if\n";
}



// not adding break to the cases 
switch($attempts){
    case 3:
        // reportToAdmin();
        //blockUser();
    case 2:
        // do something
    case 1:
        ///logAttempt(); // even on 3 and 2  attempts this case will still run
        //$attempts++
} 