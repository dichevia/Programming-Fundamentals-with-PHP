<?php

$wordLength = readline();
for ($i = 0; $i < $wordLength; $i++) {
    $command = readline();
    $length = strlen($command);
    $firstDigit = $command[0];
    if ($firstDigit == 0) {
        echo ' ';
    } else {
        if ($firstDigit == 9 || $firstDigit == 8) {
            $offset = ($firstDigit - 2) * 3 + (strlen($command));
            $letter = chr($offset + 97);
            echo $letter;
        } else {
            $offset = ($firstDigit - 2) * 3 + (strlen($command) -1);
            $letter = chr($offset + 97);
            echo $letter;
        }
    }
}