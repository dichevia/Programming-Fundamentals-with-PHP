<?php

$pattern = '/^[d-z,|#]+$/';

$text = readline();
$decrypted = '';

if (preg_match($pattern, $text)) {
    for ($i = 0; $i < strlen($text); $i++) {
        $currentSymbol = $text[$i];
        $decrypted .= chr(ord($currentSymbol) - 3);
    }
} else {
    echo "This is not the book you are looking for.";
    return;
}
$substrings = explode(' ', readline());
$searched = $substrings[0];
$replace = $substrings[1];
$decrypted = str_replace($searched, $replace, $decrypted);
echo $decrypted;