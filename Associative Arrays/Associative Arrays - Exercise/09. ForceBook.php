<?php

$sides = [];
$keys = [];
$exist = false;

while (true) {
    $input = readline();
    if ($input == "Lumpawaroo") {
        break;
    }
    if (strpos($input, "|")) {
        list ($forceSide, $forceUser) = explode(" | ", $input);
        if (!key_exists($forceSide, $sides)) {
            $sides [$forceSide] = [];
            $keys[] = $forceSide;
        }
        for ($i = 0; $i < count($keys); $i++){
            if (in_array($forceUser, $sides[$keys[$i]]) !== false) {
                $exist = true;
                break;
            }
        }
        if (!$exist){
            $sides [$forceSide][] = $forceUser;
        }
    }
    if (strpos($input, "->")) {
        list ($forceUser, $forceSide) = explode(" -> ", $input);
        for ($i = 0; $i < count($keys); $i++) {
            if (in_array($forceUser, $sides[$keys[$i]]) !== false) {
                $exist = true;
                $index = array_search($forceUser, $sides[$keys[$i]]);
                unset($sides[$keys[$i]][$index]);
                $sides[$forceSide] [] = $forceUser;
                if ($forceSide != $keys[$i]) {
                    echo "$forceUser joins the $forceSide side!" . PHP_EOL;
                }
            }
        }
        if (!$exist){
            $sides [$forceSide][] = $forceUser;
            $keys[] = $forceSide;
            echo "$forceUser joins the $forceSide side!" . PHP_EOL;
        }
    }
}

uksort($sides, function ($key1, $key2) use ($sides) {
    if (count($sides[$key2]) == count($sides[$key1])) {
        return $key1 <=> $key2;
    }
    return count($sides[$key2]) <=> count($sides[$key1]);
});

foreach ($sides as $side => $members) {
    if (count($members) != 0) {
        echo "Side: $side" . ", " . "Members: " . count($members) . PHP_EOL;
        asort($members);
        foreach ($members as $member) {
            echo "! " . $member . PHP_EOL;
        }
    }
}