<?php

$text = readline();
$filter = [',', '.', '?', '!'];
$output = [];

$text = str_replace($filter, ' ', $text);
$arrText = explode(' ', $text);
$arrText = array_filter($arrText);

foreach ($arrText as $word) {
    $revWord = strrev($word);
    if ($word == $revWord) {
        $output [] = $word;
    }
}
$output = array_unique($output);
natcasesort($output);
echo implode(', ', $output);