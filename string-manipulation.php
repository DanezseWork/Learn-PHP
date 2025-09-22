<?php

$sample_string = "Hello World";

// echo substr($sample_string, 0, 5); // Hello

// echo substr($sample_string, 6); // World

// echo strlen($sample_string); // 11

// echo strrev($sample_string); // dlroW olleH

// echo $sample_string[0]; // H

// echo $sample_string[-1]; // d

// echo str_replace("World", "Universe", $sample_string); // Hello Universe

// echo strtoupper($sample_string); // HELLO WORLD

// echo strtolower($sample_string); // hello world

// echo ucfirst(strtolower($sample_string)); // Hello world, only the first letter is capitalized

$sample_string .= "!";// this appends a ! to the end of the string
echo $sample_string;

