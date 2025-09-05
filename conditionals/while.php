<?php 

$word = "Hello";
$attempts = 0;
$maxAttempts = 5;

// while loop of guessing game
while ($attempts < $maxAttempts) {
    echo "Guess the word: ";
    $guess = trim(fgets(STDIN)); // gets user input in terminal
    $attempts++; // increment attempts to stop the loop

    if ($guess == $word) { // winning condition
        echo "You got it!\n";
        break; // exit the loop
    } elseif ($attempts == $maxAttempts) { // losing condition
        echo "You lost!\n";
    } else { // if we haven't won or lost
        echo "You have " . ($maxAttempts - $attempts) . " attempts left\n";
    }
}
