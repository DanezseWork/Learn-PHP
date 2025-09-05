<?php 

function sayHello($name) {
    echo "Hello $name.\n";
}

sayHello("world");
//sayHello(); // this will throw an error, needs an arguement

// Optional arguements in functions
function asking($name, $emotion = "happy") {
    echo "Are you $emotion $name?";
};
// $emotion is optional because it has a default value 
// optional arguements can't be declared before required ones

// $emotion can go before $name

asking("John");

