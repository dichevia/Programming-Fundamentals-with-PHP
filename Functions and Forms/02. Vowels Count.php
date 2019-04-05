<?php

$string = readline();

function vowelsCount($x)
{
    $result = 0;
    $x = strtolower($x);
    for ($i = 0; $i < strlen($x); $i++) {
        if ($x[$i] == "a" || $x[$i] == "e" || $x[$i] == "i" || $x[$i] == "o" || $x[$i] == "u") {
            $result += 1;
        }
    }
    echo $result;
}

vowelsCount($string);