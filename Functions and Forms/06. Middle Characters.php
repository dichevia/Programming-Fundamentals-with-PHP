<?php

$string = readline();

function middleChar($x)
{
    $result = '';
    $length = strlen($x);

    if ($length % 2 != 0) {
        $middle = intval($length / 2);
        $result .= $x[$middle];
    } else {
        $middle = intval($length / 2);
        $result .= $x[$middle - 1] . $x[$middle];
    }
    return $result;
}

echo middleChar($string);