<?php

$bannedWords = explode(', ', readline());
$text = readline();

foreach ($bannedWords as $word){
    $censured = str_repeat('*', strlen($word));
    $text = str_replace($word, $censured, $text);
}

echo $text;