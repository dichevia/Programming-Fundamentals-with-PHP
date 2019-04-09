<?php

$array = array_map('intval', explode(' ', readline()));
$commands = readline();

while (true) {
    if ($commands == 'Odd' || $commands == 'Even') {
        break;
    }
    $token = explode(' ', $commands);

    if ($token[0] == 'Delete') {
        for ($i = 0; $i < count($array); $i++) {
            if ($token[1] == $array[$i]) {
                array_splice($array, $i, 1);
                $i--;
            }

        }
    }
    if ($token[0] == 'Insert') {
        array_splice($array, $token[2], 0, $token[1]);
    }

    $commands = readline();
}

if ($commands == 'Odd') {
    $array = printOdd($array);
} else {
    $array = printEven($array);
}

echo implode(' ', $array);


function printOdd($arr)
{
    $newArr = [];
    foreach ($arr as $el) {
        if ($el % 2 != 0) {
            $newArr[] = $el;
        }
    }
    return $newArr;
}

function printEven($arr)
{
    $newArr = [];
    foreach ($arr as $el) {
        if ($el % 2 == 0) {
            $newArr[] = $el;
        }
    }
    return $newArr;
}