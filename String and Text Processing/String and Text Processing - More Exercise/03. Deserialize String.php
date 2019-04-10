<?php

$output = [];

while (true) {
    $input = readline();
    if ($input === 'end') {
        break;
    }
    $tokens = explode(":", $input);
    $letter = $tokens[0];
    $indexes = explode('/', $tokens[1]);
    for ($i = 0; $i <count($indexes) ; $i++){
        $output[$indexes[$i]] = $letter;
    }
}

for ($i = 0; $i <count($output) ; $i++){
    echo $output[$i];
}