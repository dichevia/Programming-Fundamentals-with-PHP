<?php

$arr = explode('&', readline());
$pattern = '/[\d\w]{16,25}/';
$newArr = [];

foreach ($arr as $symbols) {
    $output = '';
    if (preg_match($pattern, $symbols) && strlen($symbols) == 16) {
        for ($i = 0; $i < strlen($symbols); $i++) {
            $symbol = strtoupper($symbols[$i]);
            if (ord($symbol) >= 48 && ord($symbol) <= 57) {
                $symbol = abs(9 - intval($symbol));
            }
            if ($i % 4 == 0 && $i != 0) {
                $output .= '-';
            }
            $output .= $symbol;
        }
        $newArr[] = $output;
    }
    if (preg_match($pattern, $symbols) && strlen($symbols) == 25) {
        for ($i = 0; $i < strlen($symbols); $i++) {
            $symbol = strtoupper($symbols[$i]);
            if (ord($symbol) >= 48 && ord($symbol) <= 57) {
                $symbol = abs(9 - intval($symbol));
            }
            if ($i % 5 == 0 && $i != 0) {
                $output .= '-';
            }
            $output .= $symbol;
        }
        $newArr[] = $output;
    }
}

echo implode(', ', $newArr);