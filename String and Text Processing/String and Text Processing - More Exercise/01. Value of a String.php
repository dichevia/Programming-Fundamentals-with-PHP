<?php

$string = readline();
$input = readline();
$sum = 0;

if ($input === 'UPPERCASE') {
    for ($i = 0; $i < strlen($string); $i++) {
        $currentLetter = $string[$i];
        if (ord($currentLetter) >= 65 && ord($currentLetter) <= 90) {
            $sum += ord($currentLetter);
        }
    }
} elseif ($input = 'LOWERCASE') {
    for ($i = 0; $i < strlen($string); $i++) {
        $currentLetter = $string[$i];
        if (ord($currentLetter) >= 97 && ord($currentLetter) <= 122) {
            $sum += ord($currentLetter);
        }
    }
}

echo "The total sum is: $sum";