<?php

$input = readline();

while ($input != 'END') {
    if (filter_var($input, FILTER_VALIDATE_INT) || $input === '0') {
        echo "$input is integer type" . PHP_EOL;
    } elseif (filter_var($input, FILTER_VALIDATE_FLOAT) || $input === '0.0' || $input === '0.00') {
        echo "$input is floating point type" . PHP_EOL;
    } elseif (filter_var($input, FILTER_VALIDATE_BOOLEAN) || strtolower($input) == "false") {
        echo "$input is boolean type" . PHP_EOL;
    } else {
        if (strlen($input) != 1) {
            echo "$input is string type" . PHP_EOL;
        } else {
            echo "$input is character type" . PHP_EOL;
        }
    }
    $input = readline();
}