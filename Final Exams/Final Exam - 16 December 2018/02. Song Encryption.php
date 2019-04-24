<?php

$pattern = '/^(?<artist>[A-Z]{1}[a-z\'\s]+)(:)(?<song>[A-Z\s]+)$/';

while (true) {
    $encrypted = '';
    $input = readline();
    if ($input == 'end') {
        break;
    }
    if (preg_match($pattern, $input, $matches)) {
        $validInput = $matches[0];
        $key = strlen($matches['artist']);
        for ($i = 0; $i < strlen($validInput); $i++) {
            $currentChar = $validInput[$i];
            if ($currentChar === ':') {
                $encrypted .= '@';
                continue;
            }
            if (ord($currentChar) >= 65 && ord($currentChar) <= 90) {
                if ((ord($currentChar) + $key) > 90) {
                    $encryptedChar = chr(64 + ((ord($currentChar) + $key) - 90));
                } else {
                    $encryptedChar = chr(ord($currentChar) + $key);
                }
            } elseif (ord($currentChar) >= 97 && ord($currentChar) <= 122) {
                if ((ord($currentChar) + $key) > 122) {
                    $encryptedChar = chr(96 + ((ord($currentChar) + $key) - 122));
                } else {
                    $encryptedChar = chr(ord($currentChar) + $key);
                }
            } elseif ($currentChar == chr(39) || $currentChar == chr(32)) {
                $encryptedChar = $currentChar;
            } else {
                $encryptedChar = chr(ord($currentChar) + $key);
            }
            $encrypted .= $encryptedChar;
        }
        echo "Successful encryption: $encrypted" . PHP_EOL;
    } else {
        echo 'Invalid input!' . PHP_EOL;
    }
}
