<?php

$array = explode(' ', readline());
$commands = readline();

while ($commands != '3:1') {
    $tokens = explode(' ', $commands);
    if ($tokens[0] == 'merge') {
        $startIndex = $tokens[1];
        $endIndex = $tokens[2];
        if ($startIndex < 0 || $startIndex > count($array)) {
            $startIndex = 0;
        }
        if ($endIndex > count($array)) {
            $endIndex = count($array) - 1;
        }
        $tempArray = [];
        for ($i = $startIndex; $i <= $endIndex; $i++) {
            $tempArray[] = $array[$i];
        }
        $newElement = implode('', $tempArray);
        array_splice($array, $startIndex, count($tempArray), $newElement);
    } elseif ($tokens[0] == 'divide') {
        $index = $tokens[1];
        $partitions = $tokens[2];
        $toDivide = $array[$index];
        $tempArrayDiv = [];
        $partSize = (strlen($toDivide)) / $partitions;
        if (strlen($toDivide) % $partitions == 0) {
            $tempArrayDiv = str_split($toDivide, $partSize);
        } else {
            $tempArrayDiv = str_split($toDivide, $partSize);
            $last = array_splice($tempArrayDiv, $partitions - 1, $partitions);
            $last = implode('', $last);
            $tempArrayDiv[] = $last;
        }
        array_splice($array, $index, 1, $tempArrayDiv);
    }

    $commands = readline();
}

echo implode(' ', $array);