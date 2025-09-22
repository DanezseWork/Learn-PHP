<?php

$name = "John Doe";

echo "My name is $name\n"; // this is an interpolated string, meaning that the value of $name will be inserted into the string

echo 'My name is $name\n'; // this will treat $name as a literal string

$heredoc = <<<EOD
My name is $name
Multiple line string
Interpolated
EOD; // heredoc interpolates the string

echo $heredoc;

$nowdoc = <<<'EOD'
My name is $name
Multiple line string
Not interpolated
EOD; // nowdoc treats the string as a literal string

echo $nowdoc;