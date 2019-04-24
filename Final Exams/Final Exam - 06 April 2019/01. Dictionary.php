<?php

$dictionary = [];

while (true) {
    $input = readline();
    $args = explode(' | ', $input);
    foreach ($args as $element) {
        if (strpos($element, ':')) {
            list($word, $definition) = explode(': ', $element);
            $dictionary[$word][] = $definition;
        }
    }
    $words = explode(' | ', readline());
    foreach ($words as $word) {
        if (key_exists($word, $dictionary)) {
            echo "$word" . PHP_EOL;
            $currentWord = $dictionary[$word];

            uksort($currentWord, function ($key1, $key2) use ($currentWord) {
                $length1 = strlen($currentWord[$key1]);
                $length2 = strlen($currentWord[$key2]);

                return $length2 <=> $length1;
            });

            foreach ($currentWord as $definition) {
                echo ' -' . $definition . PHP_EOL;
            }
        }
    }

    $command = readline();

    if ($command === "End") {
        break;
    }
    if ($command === "List") {
        uksort($dictionary, function ($key1, $key2) use ($dictionary) {

            return $key1 <=> $key2;
        });

        foreach ($dictionary as $word => $definition) {
            echo $word . ' ';
        }
        break;
    }
}

