<?php

$patternHealth = '/(?<health>[^0-9+\-*\/.])/';
$patternDamage = '/(?<damage>[-+]?[0-9]*\.?[0-9]+)/';
$demonsHealth = [];
$demonsDamage = [];
$input = explode(',', readline());

foreach ($input as $name) {
    $name = trim($name);
    $multiplier = '';
    preg_match_all($patternHealth, $name, $matches);
    $health = 0;
    foreach ($matches['health'] as $letter) {
        $health += ord($letter);
    }
    preg_match_all($patternDamage, $name, $matches2);
    $damage = 0;
    foreach ($matches2['damage'] as $symbol) {
        $damage += floatval($symbol);
    }
    for ($i = 0; $i < strlen($name); $i++) {
        $currentSymbol = $name[$i];
        if ($currentSymbol == '*' || $currentSymbol == '/') {
            if ($currentSymbol == '*') {
                $damage *= 2;
            } elseif ($currentSymbol == '/') {
                $damage /= 2;
            }
        }
    }
    $demonsHealth[$name] = $health;
    $demonsDamage[$name] = $damage;
}

ksort($demonsHealth);
foreach ($demonsHealth as $name => $value) {
    printf("%s - %d health, %.2f damage\n", $name, $value, $demonsDamage[$name]);
}