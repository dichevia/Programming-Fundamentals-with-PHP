<?php

$pattern = '/(?<start>[A-Za-z]+)(?<placeholder>.+)(\1)/';
$pattern2 = '/{(?<placeholders2>\s?\w+\s?)}/';
$text = readline();
$placeholders = readline();

preg_match_all($pattern, $text, $matches, PREG_SET_ORDER, 0);
preg_match_all($pattern2, $placeholders, $matches2, PREG_SET_ORDER, 0);

$matchesLength = count($matches);
$matches2Length = count($matches2);

if ($matchesLength <= $matches2Length) {
    $length = $matchesLength;
} else {
    $length = $matches2Length;
}

$output = $text;
for ($i = 0; $i < $length; $i++) {
    $output = str_replace($matches[$i]['placeholder'], $matches2[$i]['placeholders2'], $output);
}

echo $output;