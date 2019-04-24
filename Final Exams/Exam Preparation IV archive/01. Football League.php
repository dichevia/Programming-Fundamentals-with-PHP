<?php

$leagueStanding = [];
$scorers = [];

$key = readline();
$pattern = '/(?<goals1>[\d]+):(?<goals2>[\d]+)/';

while (true) {
    $input = readline();
    if ($input === 'final') {
        break;
    }
    if (preg_match($pattern, $input, $matches) !== false) {
        $goals1 = $matches['goals1'];
        $goals2 = $matches['goals2'];
    };
    $index1 = strpos($input, $key);
    $input = substr($input, $index1 + strlen($key));
    $index2 = strpos($input, $key);
    $team1 = strtoupper(strrev(substr($input, 0, $index2)));
    $input = substr($input, $index2 + strlen($key));
    $index3 = strpos($input, $key);
    $input = substr($input, $index3 + strlen($key));
    $index4 = strpos($input, $key);
    $team2 = strtoupper(strrev(substr($input, 0, $index4)));
    if (!key_exists($team1, $scorers)) {
        $scorers[$team1] = $goals1;
    } else {
        $scorers[$team1] += $goals1;
    }
    if (!key_exists($team2, $scorers)) {
        $scorers[$team2] = $goals2;
    } else {
        $scorers[$team2] += $goals2;
    }
    if ($goals1 > $goals2) {
        if (!key_exists($team1, $leagueStanding)) {
            $leagueStanding[$team1] = 3;
        } else {
            $leagueStanding[$team1] += 3;
        }
        if (!key_exists($team2, $leagueStanding)) {
            $leagueStanding[$team2] = 0;
        } else {
            $leagueStanding[$team2] += 0;
        }
    } elseif ($goals1 == $goals2) {
        if (!key_exists($team1, $leagueStanding)) {
            $leagueStanding[$team1] = 1;
        } else {
            $leagueStanding[$team1] += 1;
        }
        if (!key_exists($team2, $leagueStanding)) {
            $leagueStanding[$team2] = 1;
        } else {
            $leagueStanding[$team2] += 1;
        }
    } else {
        if (!key_exists($team2, $leagueStanding)) {
            $leagueStanding[$team2] = 3;
        } else {
            $leagueStanding[$team2] += 3;
        }
        if (!key_exists($team1, $leagueStanding)) {
            $leagueStanding[$team1] = 0;
        } else {
            $leagueStanding[$team1] += 0;
        }
    }
}

uksort($leagueStanding, function ($key1, $key2) use ($leagueStanding) {
    if ($leagueStanding[$key2] == $leagueStanding[$key1]) {
        return $key1 <=> $key2;
    }
    return $leagueStanding[$key2] <=> $leagueStanding[$key1];
});
$count = 1;
echo "League standings:" . PHP_EOL;
foreach ($leagueStanding as $team => $points) {
    echo "$count. $team $points" . PHP_EOL;
    $count++;
}
uksort($scorers, function ($key1, $key2) use ($scorers) {
    if ($scorers[$key2] == $scorers[$key1]) {
        return $key1 <=> $key2;
    }
    return $scorers[$key2] <=> $scorers[$key1];
});
echo "Top 3 scored goals:" . PHP_EOL;
$count2 = 0;
foreach ($scorers as $team => $goals) {
    echo "- $team -> $goals" . PHP_EOL;
    $count2++;
    if ($count2 == 3) {
        break;
    }
}