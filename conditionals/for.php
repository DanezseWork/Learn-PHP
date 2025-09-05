<?php

echo "Number Countdown:\n";

for ($i = 10; $i > 0; $i--) {
    echo $i . "\n";

    // side note: it is better to put a value first before a variable
    // 1 == $i is better than, $i == 1, since it will immediately throw an error if "=" instead of "=="
    if (1 == $i) {
        echo "Done!\n";
    }
    sleep(1); // adds delay
}