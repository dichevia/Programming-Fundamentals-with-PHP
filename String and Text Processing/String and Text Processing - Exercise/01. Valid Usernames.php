<?php

$usernames = explode(', ', readline());
$validUsernames = [];

foreach ($usernames as $i => $username) {
    if (strlen($username) >= 3 && strlen($username) <= 16) {
        preg_match_all('/[A-za-z0-9-_]/', $username, $filtered);
        $match = implode('', $filtered[0]);
        if ($match === $username) {
            $validUsernames[] = $username;
        }
    }
}
foreach ($validUsernames as $valid) {
    echo $valid . PHP_EOL;
}