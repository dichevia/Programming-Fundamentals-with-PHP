<?php

$results = [];
$submissions = [];

while (true) {
    $input = readline();
    if ($input == "exam finished") {
        break;
    }
    $tokens = explode("-", $input);
    $user = $tokens[0];
    $command = $tokens[1];
    if ($command != "banned") {
        $language = $tokens[1];
        $points = $tokens[2];
        if (!key_exists($user, $results)) {
            $results[$user] = $points;
        } else {
            if ($points > $results[$user]) {
                $results[$user] = $points;
            }
        }
        if (!key_exists($language, $submissions)) {
            $submissions[$language] = 1;
        } else {
            $submissions[$language]++;
        }
    } else {
        unset($results[$user]);
    }
}

uksort($results, function ($key1, $key2) use ($results) {
    if ($results[$key2] == $results[$key1]) {
        return $key1 <=> $key2;
    }
    return $results[$key2] <=> $results[$key1];
});

uksort($submissions, function ($key1, $key2) use ($submissions) {
    if ($submissions[$key2] == $submissions[$key1]) {
        return $key1 <=> $key2;
    }
    return $submissions[$key2] <=> $submissions[$key1];
});

echo "Results:" . PHP_EOL;
foreach ($results as $user => $points) {
    echo "$user | $points" . PHP_EOL;
}
echo "Submissions:" . PHP_EOL;
foreach ($submissions as $language => $count) {
    echo "$language - $count" . PHP_EOL;
}
