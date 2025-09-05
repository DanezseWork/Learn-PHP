<?php 

$large_array = range(1, 1_000_000);
$start_time = microtime(true);
$start_memory = memory_get_usage();

// $out = [];

// foreach ($large_array as $value) {
//     $out[] = $value * 2;
// }

// using reference in the loop increases the time taken and memory used
foreach ($large_array as &$value) {
    $value = $value * 2;
}

$end_time = microtime(true);
$end_memory = memory_get_usage();

echo "Time: " . ($end_time - $start_time) . "seconds\n";
echo "Memory: " . round(($end_memory - $start_memory) / 1024 / 1024) . "MB\n";