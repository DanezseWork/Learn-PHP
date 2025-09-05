<?php
declare(strict_types=1);

$null_var = null;
$default_var = $null_var ?? "default";

var_dump(
    $null_var,
    $default_var,
    is_null($null_var),
    isset($null_var),
    empty($null_var),
    null == null,
    null == false,
    null == 0,
    null == "",
    null == [],
);

function increment(?int $num) {// ? allows null even on strict types
    $num = $num ?? 5; // if $num is null, set it to 5
    $num++;
    echo "Incremented: " . $num . "\n";
}

increment(1);
increment(null);

var_dump(
    array_filter(
        [1, 0, null,"test", false, 5]
        )
    );