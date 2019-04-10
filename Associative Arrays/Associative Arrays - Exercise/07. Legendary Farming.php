<?php

$Shadowmourne = false;
$Valanyr = false;
$Dragonwrath = false;

$collected = [];

while (true) {
    $input = explode(' ', strtolower(readline()));
    for ($i = 0; $i < count($input); $i += 2) {
        if ($i % 2 == 0) {
            $num = $input[$i];
            $item = $input[$i + 1];
        }
        if (!key_exists($item, $collected)) {
            $collected[$item] = 0;
        }
        $collected[$item] += intval($num);
        foreach ($collected as $items => $numbers) {
            switch ($items) {
                case "shards":
                    if ($numbers >= 250) {
                        $Shadowmourne = true;
                        $collected[$items] -= 250;
                    }
                    break;
                case "fragments":
                    if ($numbers >= 250) {
                        $Valanyr = true;
                        $collected[$items] -= 250;
                    }
                    break;
                case "motes":
                    if ($numbers >= 250) {
                        $Dragonwrath = true;
                        $collected[$items] -= 250;
                    }
                    break;
            }
            if ($Shadowmourne == true || $Valanyr == true || $Dragonwrath == true) {
                break;
            }
        }
        if ($Shadowmourne == true || $Valanyr == true || $Dragonwrath == true) {
            break;
        }
    }
    if ($Shadowmourne == true || $Valanyr == true || $Dragonwrath == true) {
        break;
    }
}

$junk = [];
$essentials = ['shards' => 0, 'fragments' => 0, 'motes' => 0];

foreach ($collected as $key => $element) {
    switch ($key) {
        case "shards":
            $essentials[$key] = $element;
            break;
        case "fragments":
            $essentials[$key] = $element;
            break;
        case "motes":
            $essentials[$key] = $element;
            break;
        default:
            $junk[$key] = $element;
    }
}

if ($Valanyr) {
    echo "Valanyr obtained!" . PHP_EOL;
} elseif ($Shadowmourne) {
    echo "Shadowmourne obtained!" . PHP_EOL;
} elseif ($Dragonwrath) {
    echo "Dragonwrath obtained!" . PHP_EOL;
}

uksort($essentials, function ($key1, $key2) use ($essentials) {
    if ($essentials[$key1] == $essentials[$key2]) {
        return $key1 <=> $key2;
    }
    return $essentials[$key2] <=> $essentials[$key1];
});

foreach ($essentials as $item => $value) {
    echo $item . ': ' . $value . PHP_EOL;
}
ksort($junk);
foreach ($junk as $item => $value) {
    echo $item . ': ' . $value . PHP_EOL;
}