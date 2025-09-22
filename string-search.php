<?php

$haystack = "Hello, World!";

// echo strpos($haystack, "world"); // 7, this will return the position of the first occurrence of "world" in $haystack

$newstack = str_replace("World", "Universe", $haystack); // this will replace "world" with "universe" in $haystack

// echo $newstack;

preg_match_all("/\w{5}/", $haystack, $matches); // this will match all words in $haystack and store them in $matches

// var_dump($matches);// this will print the matches, which is an array

echo count($matches[0]); // matches is a nested array, so we need to access the first element