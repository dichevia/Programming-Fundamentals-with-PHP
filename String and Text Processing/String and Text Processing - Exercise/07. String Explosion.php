<?php

$text = readline();
$newText = '';

for ($i = 0; $i < strlen($text); $i++) {
    $currentString = $text[$i];
    if ($currentString == ">") {
        $toDestroy = intval($text[$i + 1]);
        $newText .= ">";
        $check = substr($text, $i + 1, $toDestroy);
        if (strpos($check, ">") === false) {
            $i = $i + $toDestroy;
        } else {
            $newText .= ">";
            $currentSymbol = strpos($text, ">", $i);
            $nextSymbol = strpos($text, ">", $i + 1);
            $destroyed = ($nextSymbol - $currentSymbol) - 1;
            $toDestroy -= $destroyed;
            $nextToDestroy = intval($text[($nextSymbol + 1)]);
            $nextToDestroy += $toDestroy;
            $i = $nextSymbol + $nextToDestroy;
        }
    } else {
        $newText .= $text[$i];
    }
}

echo $newText;