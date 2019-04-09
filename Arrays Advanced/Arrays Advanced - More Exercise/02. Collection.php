<?php

$array = [];
$commands = readline();

while ($commands !== 'Print') {
    $tokens = explode(' ', $commands);
    switch ($tokens[0]) {
        case 'Push':
            array_unshift($array, $tokens[1]);
            break;
        case 'Add':
            $array[] = $tokens[1];
            break;
        case 'Pop':
            array_shift($array);
            break;
        case 'Enqueue':
            array_pop($array);
            break;
    }
    $commands = readline();
}

echo implode(' ', $array);