<?php

$number = readline();

function palindromeInt($x)
{

    while ($x != 'END') {
        $length = intval(strlen(strval($x)));
        $palindrome = false;
        for ($i = 0; $i < $length / 2; $i++) {
            if ($x[$i] == $x[$length - $i - 1]) {
                $palindrome = true;
            } else {
                $palindrome = false;
                break;
            }
        }
        if ($palindrome) {
            echo 'true' . PHP_EOL;
        } else {
            echo 'false' . PHP_EOL;
        }
        $x = readline();
    }
}

palindromeInt($number);