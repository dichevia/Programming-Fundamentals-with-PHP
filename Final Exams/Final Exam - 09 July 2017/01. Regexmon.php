<?php

$patternDidimon = '/(?<didimon>[^A-Za-z-]+)/';
$patternBojomon = '/(?<bojomon>[A-Za-z]+-[A-Za-z]+)/';
$input = readline();

while (true) {
    preg_match($patternDidimon, $input, $matches);
    if (isset($matches['didimon'])) {
        echo $matches['didimon'] . PHP_EOL;
        $index = strpos($input, $matches['didimon']);
        $input = substr($input, $index + strlen($matches['didimon']));
    } else {
        break;
    }
    preg_match($patternBojomon, $input, $matches2);
    if (isset($matches2['bojomon'])) {
        echo $matches2['bojomon'] . PHP_EOL;
        $index2 = strpos($input, $matches2['bojomon']);
        $input = substr($input, $index2 + strlen($matches2['bojomon']));
    } else {
        break;
    }
}