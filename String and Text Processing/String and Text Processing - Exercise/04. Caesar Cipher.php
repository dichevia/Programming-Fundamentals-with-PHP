<?php

$text = readline();
$newText = '';

for ($i = 0; $i <strlen($text) ; $i++){
    $newChar = ord($text[$i])+3;
    $newText .= chr($newChar);
}

echo $newText;