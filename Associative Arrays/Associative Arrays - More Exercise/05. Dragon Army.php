<?php

$n = intval(readline());
$dragons = [];
$averageByType = [];

for ($i = 0; $i < $n; $i++) {
    $dragonsStats = [];
    $input = readline();
    list ($type, $name, $damage, $health, $armor) = explode(' ', $input);
    if ($damage == 'null') {
        $damage = 45;
    }
    if ($health == 'null') {
        $health = 250;
    }
    if ($armor == 'null') {
        $armor = 10;
    }
    if (!key_exists($name, $dragonsStats)) {
        $dragonsStats = [];
        array_push($dragonsStats, $damage, $health, $armor);
    }
    if (!key_exists($type, $dragons)) {
        $dragons[$type][$name] = $dragonsStats;
        $averageByType [$type]["damageStat"] = $damage;
        $averageByType [$type]["healthStat"] = $health;
        $averageByType [$type]["armorStat"] = $armor;

    } else {
        if (key_exists($name, $dragons[$type])) {
            $averageByType [$type]["damageStat"] -= $dragons[$type][$name][0];
            $averageByType [$type]["healthStat"] -= $dragons[$type][$name][1];
            $averageByType [$type]["armorStat"] -= $dragons[$type][$name][2];
        }
        $averageByType [$type]["damageStat"] += $damage;
        $averageByType [$type]["healthStat"] += $health;
        $averageByType [$type]["armorStat"] += $armor;

        $dragons[$type] [$name] = $dragonsStats;
    }
}

foreach ($dragons as $type => $value) {
    $averageDamage = number_format(($averageByType[$type]['damageStat']) / (count($dragons[$type])), 2, '.', '');
    $averageHealth = number_format($averageByType[$type]['healthStat'] / (count($dragons[$type])), 2, '.', '');
    $averageArmor = number_format($averageByType[$type]['armorStat'] / (count($dragons[$type])), 2, '.', '');
    echo $type . "::($averageDamage/$averageHealth/$averageArmor)" . PHP_EOL;
    ksort($value);
    foreach ($value as $name => $stats) {
        echo "-$name -> damage: $stats[0], health: $stats[1], armor: $stats[2]" . PHP_EOL;
    }
}