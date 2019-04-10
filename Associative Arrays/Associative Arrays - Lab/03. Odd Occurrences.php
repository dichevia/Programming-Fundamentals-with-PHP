<?php

$words = array_map('strtolower', explode(' ', readline()));
$resultOfOdds = [];

foreach ($words as $word) {
    if (!key_exists($word, $resultOfOdds)) {
        $resultOfOdds[$word] = 0;
    }
    $resultOfOdds[$word]++;
}

foreach ($resultOfOdds as $key => $times) {
    if ($times % 2 != 0) {
        echo $key . ' ';
    }
}