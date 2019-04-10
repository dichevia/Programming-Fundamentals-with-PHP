<?php

$players = [];
$tiers = [];
$player1Exist = false;
$player2Exist = false;

while (true) {
    $input = readline();
    if ($input == 'Season end') {
        break;
    }
    if (strpos($input, "->")) {
        $tokens = explode(' -> ', $input);
        $player = $tokens[0];
        $position = $tokens[1];
        $skill = $tokens[2];
        if (!key_exists($player, $players)) {
            $players[$player][$position] = $skill;
            $tiers[$position][] = $player;
        } else {
            if (!key_exists($position, $players[$player])) {
                $players[$player][$position] = $skill;
                $tiers[$position][] = $player;
            } else {
                if ($skill > $players[$player][$position]) {
                    $players[$player][$position] = $skill;
                }
            }
        }
    } else {
        $tokens = explode(' vs ', $input);
        $player1 = $tokens[0];
        $player2 = $tokens[1];
        if (key_exists($player1, $players) && key_exists($player2, $players)) {
            for ($i = 0; $i < count($tiers); $i++) {
                foreach ($tiers[$position] as $user) {
                    if ($user == $player1) {
                        $player1Exist = true;

                    }
                    if ($user == $player2) {
                        $player2Exist = true;

                    }
                }
            }
            if ($player1Exist && $player2Exist) {
                if (array_sum($players[$player1]) > array_sum($players[$player2])) {
                    unset($players[$player2]);
                } elseif (array_sum($players[$player1]) < array_sum($players[$player2])) {
                    unset($players[$player1]);
                }
            }
        }
    }
}

uksort($players, function ($key1, $key2) use ($players) {
    $sum1 = array_sum($players[$key1]);
    $sum2 = array_sum($players[$key2]);
    if ($sum2 == $sum1) {
        return $key1 <=> $key2;
    }
    return $sum2 <=> $sum1;
});

foreach ($players as $player => $value) {
    echo $player . ": " . array_sum($value) . " skill" . PHP_EOL;
    uksort($value, function ($key1, $key2) use ($value) {
        $skill1 = $value[$key1];
        $skill2 = $value[$key2];
        if ($skill1 == $skill2) {
            return $key1 <=> $key2;
        }
        return $skill2 <=> $skill1;
    });
    foreach ($value as $position => $skill) {
        echo "- " . $position . " <::> " . $skill . PHP_EOL;
    }
}