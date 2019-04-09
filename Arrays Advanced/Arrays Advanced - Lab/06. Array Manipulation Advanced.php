<?php

$array = array_map('intval', explode(' ', readline()));
$command = readline();
$output = '';

while ($command != 'end') {
    $token = explode(' ', $command);
    if ($token[0] == 'Add') {
        $element = intval($token[1]);
        array_push($array, $element);
    }
    if ($token[0] == 'Remove') {
        $element = intval($token[1]);
        $index = array_search($element, $array);
        array_splice($array, $index, 1);
    }
    if ($token[0] == 'RemoveAt') {
        array_splice($array, $token[1], 1);
    }
    if ($token[0] == 'Insert') {
        array_splice($array, $token[2], 0, $token[1]);
    }
    if ($token[0] == 'Contains') {
        $element = $token[1];
        if (in_array($element, $array)) {
            $output .= "Yes" . PHP_EOL;
        } else {
            $output .= 'No such number' . PHP_EOL;
        }
    }
    if ($token[0] == 'Print') {
        if ($token[1] == 'odd') {
            $oddArr = printOdd($array);
            $output .= implode(' ', $oddArr) . PHP_EOL;
        } elseif ($token[1] == 'even') {
            $evenArr = printEven($array);
            $output .= implode(' ', $evenArr) . PHP_EOL;
        }
    }
    if ($token[0] == 'Get' && $token[1] == 'sum') {
        $output .= $sum = array_sum($array) . PHP_EOL;
    }
    if ($token[0] == 'Filter') {
        if ($token[1] == '>') {
            $filterBigger = filterBigger($array, $token[2]);
            $output .= implode(' ', $filterBigger) . PHP_EOL;
        }
        if ($token[1] == '>=') {
            $filterBiggerOrEqual = filterBiggerOrEqual($array, $token[2]);
            $output .= implode(' ', $filterBiggerOrEqual) . PHP_EOL;
        }
        if ($token[1] == '<') {
            $filterSmaller = filterSmaller($array, $token[2]);
            $output .= implode(' ', $filterSmaller) . PHP_EOL;
        }
        if ($token[1] == '<=') {
            $filterSmallerOrEqual = filterSmallerOrEqual($array, $token[2]);
            $output .= implode(' ', $filterSmallerOrEqual) . PHP_EOL;
        }
    }

    $command = readline();
}
echo $output;
echo implode(' ', $array);

function printOdd($arr)
{
    $oddArr = [];
    foreach ($arr as $el) {
        if ($el % 2 != 0) {
            $oddArr[] = $el;
        }
    }
    return $oddArr;
}

function printEven($arr)
{
    $evenArr = [];
    foreach ($arr as $el) {
        if ($el % 2 == 0) {
            $evenArr[] = $el;
        }
    }
    return $evenArr;
}

function filterBigger($arr, $value)
{
    $newArr = [];
    foreach ($arr as $el) {
        if ($el > $value) {
            $newArr[] = $el;
        }
    }
    return $newArr;
}

function filterBiggerOrEqual($arr, $value)
{
    $newArr = [];
    foreach ($arr as $el) {
        if ($el >= $value) {
            $newArr[] = $el;
        }
    }
    return $newArr;
}

function filterSmaller($arr, $value)
{
    $newArr = [];
    foreach ($arr as $el) {
        if ($el < $value) {
            $newArr[] = $el;
        }
    }
    return $newArr;
}

function filterSmallerOrEqual($arr, $value)
{
    $newArr = [];
    foreach ($arr as $el) {
        if ($el <= $value) {
            $newArr[] = $el;
        }
    }
    return $newArr;
}