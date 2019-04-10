<?php

$dwarfs = [];

while (true) {
    $input = readline();
    if ($input == "Once upon a time") {
        break;
    }
    $tokens = explode(" <:> ", $input);
    $name = $tokens[0];
    $color = $tokens[1];
    $physic = $tokens[2];
    if (!key_exists("($color) $name)", $dwarfs)) {
        $dwarfs["($color) $name"] = $physic;
    } else {
        if ($physic > $dwarfs["($color) $name)"]) {
            $dwarfs["($color) $name"] = $physic;
        }
    }
}

uksort($dwarfs, function ($key1, $key2) use ($dwarfs) {
    if ($dwarfs[$key2] == $dwarfs[$key1]) {
        $count1 = 0;
        $count2 = 0;

        $token1 = explode(' ', $key1);
        $part1 = $token1[0];
        foreach ($dwarfs as $key => $value) {
            $key1token = explode(' ', $key);
            $matchedKey1 = $key1token[0];
            if ($matchedKey1 == $part1) {
                $count1++;
            }
        }

        $token2 = explode(' ', $key2);
        $part2 = $token2[0];
        foreach ($dwarfs as $key => $value) {
            $key2token = explode(' ', $key);
            $matchedKey2 = $key2token[0];
            if ($matchedKey2 == $part2) {
                $count2++;
            }
        }
        if ($count2 != $count1) {
            return $count2 <=> $count1;
        }

        if ($count1 == $count2) {
            return strcmp($count1, $count2);
        }
    }

    return $dwarfs[$key2] <=> $dwarfs[$key1];
});

foreach ($dwarfs as $colorName => $physic) {
    echo "$colorName <-> $physic" . PHP_EOL;
}