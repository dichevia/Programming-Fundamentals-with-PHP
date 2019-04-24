<?php

$key = intval(readline());
$pattern = '/@(?<name>[A-Za-z]+)([^@\-!:>]+)!(?<type>[NG]+)!/';

while (true) {
    $decrypted = '';
    $input = readline();
    if ($input === 'end') {
        break;
    }
    for ($i = 0; $i < strlen($input); $i++) {
        $currentSymbol = $input[$i];
        $newSymbol = chr(ord($currentSymbol) - $key);
        $decrypted .= $newSymbol;
    }
    if (preg_match($pattern, $decrypted, $matches)) {
        if ($matches['type'] === 'G') {
            echo $matches['name'], PHP_EOL;
        }
    }
}