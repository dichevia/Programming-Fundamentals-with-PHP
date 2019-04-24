<?php

$results = [];
$submissions = [];

while (true) {
    $input = readline();
    if ($input === 'exam finished') {
        break;
    }
    $args = explode('-', $input);
    $username = $args[0];
    $command = $args[1];
    if ($command !== 'banned') {
        $language = $args[1];
        $points = $args[2];
        if (!key_exists($username, $results)) {
            $results[$username] = $points;
        } else {
            if ($points > $results[$username]) {
                $results[$username] = $points;
            }
        }
        if (!key_exists($language, $submissions)) {
            $submissions[$language] = 1;
        } else {
            $submissions[$language] += 1;
        }
    } else {
        unset($results[$username]);
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
foreach ($results as $username => $points) {
    echo "$username | $points" . PHP_EOL;
}
echo "Submissions:" . PHP_EOL;
foreach ($submissions as $language => $count) {
    echo "$language - $count" . PHP_EOL;
}