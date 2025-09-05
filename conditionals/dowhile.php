<?php 

do {
    $gamble = rand(1, 100);
    echo "You rolled a $gamble\n";

    if ($gamble == 100) {
        echo "You won something rare!\n";
    } elseif ($gamble == 1) {
        echo "You lost everything!\n";
        break;
    } else {
        echo "You got something common!\n";
    }
    
    echo "Would you like to gamble again? (y/n)\n";
    $answer = trim(fgets(STDIN));
} while ($answer == "y");