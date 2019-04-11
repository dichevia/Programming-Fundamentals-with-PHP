<?php

$words = explode(' ', readline());

while (true) {
    $input = readline();
    if ($input == 'Stop') {
        break;
    }
    $tokens = explode(' ', $input);
    $command = $tokens[0];
    if ($command == 'Delete') {
        $index = $tokens[1];
        if ($index < count($words) - 1 && $index >= 0) {
            array_splice($words, $index + 1, 1);
        }
    }
    if ($command == 'Swap') {
        $word1 = $tokens[1];
        $word2 = $tokens[2];
        if (in_array($word1, $words) && in_array($word2, $words)) {
            $index1 = array_search($word1, $words);
            $index2 = array_search($word2, $words);
            array_splice($words, $index1, 1, $word2);
            array_splice($words, $index2, 1, $word1);
        }
    }
    if ($command == 'Put') {
        $word = $tokens[1];
        $index = $tokens[2];
        if ($index >= 1 && $index <=count($words)+1) {
            array_splice($words, $index - 1, 0, $word);
        }
    }
    if ($command == 'Sort') {
        natcasesort($words);
        $words = array_reverse($words);
    }
    if ($command == 'Replace') {
        $word1 = $tokens[1];
        $word2 = $tokens[2];
        if (in_array($word2, $words)) {
            $index2 = array_search($word2, $words);
            array_splice($words, $index2, 1, $word1);
        }
    }
}

echo implode(' ', $words);