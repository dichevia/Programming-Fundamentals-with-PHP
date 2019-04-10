<?php

$text = readline();
$toSearch = readline();
$toFilter = [',', '.', '?', '!'];

$text = str_replace($toFilter, ' ', $text);
$filteredText = explode(' ', $text);
$filteredText = array_filter($filteredText);
$counter = 0;

foreach ($filteredText as $word) {
    if ($word === $toSearch) {
        $counter++;
    }
}

echo $counter;