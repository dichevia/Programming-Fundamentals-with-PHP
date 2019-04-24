<?php

$input = readline();
$pattern1 = '/[#$%&*]([A-z]+)[#$%&*]/';
$pattern2 = '/([\d]+):([\d]{2})/';
$capitals = '';
$symbols = [];

$parts = explode('|', $input);
$firstPart = $parts[0];
$secondPart = $parts[1];
$thirdPart = $parts[2];

if (preg_match_all($pattern1, $firstPart, $match1) !== false) {
    for ($i = 0; $i < count($match1[0]); $i++) {
        if ($match1[0][$i][0] === $match1[0][$i][strlen($match1[0][$i]) - 1]) {
            $capitals .= $match1[1][$i];
        }
    }
}
if (preg_match_all($pattern2, $secondPart, $match2) !== false) {
    for ($i = 0; $i < strlen($capitals); $i++) {
        $currentChar = $capitals[$i];
        foreach ($match2[1] as $key => $value) {
            if (ord($currentChar) == intval($value)) {
                $symbols [$currentChar] = intval($match2[2][$key]) + 1;
            }
        }
    }
}

$text = explode(' ', $thirdPart);

 foreach ($symbols as $letter => $length){
    foreach ($text as $word) {
        if ($word[0] === $letter && strlen($word) === $length) {
            echo $word . PHP_EOL;
        }
    }
}
