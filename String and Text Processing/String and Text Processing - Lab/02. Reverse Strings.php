<?php

while (true) {
    $input = readline();
    if ($input == 'end') {
        break;
    }
    $output = strrev($input);
    echo "$input = $output".PHP_EOL;
}