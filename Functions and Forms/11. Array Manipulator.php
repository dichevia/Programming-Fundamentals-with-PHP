<?php

$array = array_map('intval', explode(' ', readline()));
$command = readline();
$output = '';


while ($command != 'end') {
    $command = explode(' ', $command);
    if ($command[0] == 'exchange') {
        $array = exchange($array, (int)($command[1]));
        if ($command[1] < 0 || $command[1]> (count($array)) - 1) {
            $output.= "Invalid index".PHP_EOL;
        }
    }
    if ($command[0] == 'max' && $command[1] == 'even') {

        $output .= maxEven($array) . PHP_EOL;
    }
    if ($command[0] == 'max' && $command[1] == 'odd') {

        $output .= maxOdd($array) . PHP_EOL;
    }
    if ($command[0] == 'min' && $command[1] == 'even') {

        $output .= minEven($array) . PHP_EOL;
    }
    if ($command[0] == 'min' && $command[1] == 'odd') {

        $output .= minOdd($array) . PHP_EOL;
    }
    if ($command[0] == 'first' && $command[2] == 'even') {

        $output .= firstEvenCount($array, $command[1]) . PHP_EOL;
    }if ($command[0] == 'first' && $command[2] == 'odd') {

        $output .= firstOddCount($array, $command[1]) . PHP_EOL;
    }
    if ($command[0] == 'last' && $command[2] == 'even') {

        $output .= lastEvenCount($array, $command[1]) . PHP_EOL;
    }
    if ($command[0] == 'last' && $command[2] == 'odd') {

        $output .= lastOddCount($array, $command[1]) . PHP_EOL;
    }

    $command = readline();
}

echo $output;
$array = implode(', ', $array);
echo "[$array]";


function exchange(array $x, int $y)
{
    $newArr = [];
    if ($y < 0 || $y > (count($x)) - 1) {
        return $x;
    }
    foreach ($x as $i => $value) {
        if ($i > $y) {
            $newArr [] = $value;
        }
    }
    foreach ($x as $i => $value) {
        if ($i <= $y) {
            $newArr [] = $value;
        }
    }
    $x = $newArr;
    return $x;
}

function maxEven($x)
{
    $newArr = [];

    foreach ($x as $i => $value) {
        if ($value % 2 == 0) {
            $newArr [] = $value;
        }
    }
    if ($newArr == []) {
        $maxEven = "No matches";
    } else {
        $maxEven = max($newArr);

        for ($j = count($x)-1; $j >=0; $j--) {
            if ($x[$j] == $maxEven) {
                $maxEven = $j;
                break;
            }
        }
    }

    return $maxEven;
}

function maxOdd($x)
{

    $newArr = [];

    foreach ($x as $i => $value) {
        if ($value % 2 != 0) {
            $newArr [] = $value;
        }
    }
    if ($newArr == []) {
        $maxOdd = "No matches";
    } else {
        $maxOdd = max($newArr);

        for ($j = count($x)-1; $j >=0; $j--) {
            if ($x[$j] == $maxOdd) {
                $maxOdd = $j;
                break;
            }
        }
    }

    return $maxOdd;
}

function minEven($x)
{

    $newArr = [];

    foreach ($x as $i => $value) {
        if ($value % 2 == 0) {
            $newArr [] = $value;
        }
    }
    if ($newArr == []) {
        $minEven = "No matches";
    } else {
        $minEven = min($newArr);

        for ($j = count($x)-1; $j >=0; $j--) {
            if ($x[$j] == $minEven) {
                $minEven = $j;
                break;
            }
        }
    }

    return $minEven;
}

function minOdd($x)
{

    $newArr = [];

    foreach ($x as $i => $value) {
        if ($value % 2 != 0) {
            $newArr [] = $value;
        }
    }
    if ($newArr == []) {
        $minOdd = "No matches";
    } else {
        $minOdd = min($newArr);

        for ($j = count($x)-1; $j >=0; $j--) {
            if ($x[$j] == $minOdd) {
                $minOdd = $j;
                break;
            }
        }
    }

    return $minOdd;
}

function firstEvenCount (array $x, int $y){

    $counter = 0;
    $y = $y-1;
    $newArr = [];

    if ($y>count ($x)-1){
        return 'Invalid count';
    }else{
        foreach ($x as $i => $value) {
            if ($value % 2 == 0 && $counter<=$y) {
                $counter++;
                $newArr [] = $value;
            }
        }
        if ($newArr == []){
            return '[]';
        }
    }

    return '['.implode(', ',$newArr ).']';
}

function firstOddCount (array $x, int $y){

    $counter = 0;
    $y = $y-1;
    $newArr = [];

    if ($y>count ($x)-1){
        return 'Invalid count';
    }else{
        foreach ($x as $i => $value) {
            if ($value % 2 != 0 && $counter<=$y) {
                $counter++;
                $newArr [] = $value;
            }
        }
        if ($newArr == []){
            return '[]';
        }
    }

    return '['.implode(', ',$newArr ).']';
}

function lastEvenCount (array $x, int $y){

    $counter = 0;
    $y = $y-1;
    $newArr = [];

    if ($y>count ($x)-1){
        return 'Invalid count';
    }else{
        for ($i = count($x)-1; $i >=0; $i--) {
            if ($x[$i]% 2 == 0 && $counter<=$y) {
                $counter++;
                $newArr [] = $x[$i];
            }
        }
        if ($newArr == []){
            return '[]';
        }
    }
    $newArr =array_reverse($newArr);
    return '['.implode(', ',$newArr ).']';
}
function lastOddCount (array $x, int $y){

    $counter = 0;
    $y = $y-1;
    $newArr = [];

    if ($y>count ($x)-1){
        return 'Invalid count';
    }else{
        for ($i = count($x)-1; $i >=0; $i--) {
            if ($x[$i]% 2 != 0 && $counter<=$y) {
                $counter++;
                $newArr [] = $x[$i];
            }
        }
        if ($newArr == []){
            return '[]';
        }
    }
    $newArr =array_reverse($newArr);
    return '['.implode(', ',$newArr ).']';
}