<?php

$children = [];
$toys = [];

while (true) {
    $input = readline();
    if ($input === 'END') {
        break;
    }
    $args = explode('->', $input);
    $command = $args[0];
    if ($command !== 'Remove') {
        $name = $args[0];
        $toy = $args[1];
        $amount = $args[2];
        if (!key_exists($name, $children)) {
            $children[$name] = $amount;
        } else {
            $children[$name] += $amount;
        }
        if (!key_exists($toy, $toys)) {
            $toys[$toy] = $amount;
        } else {
            $toys[$toy] += $amount;
        }
    } else {
        $name = $args[1];
        unset($children[$name]);
    }
}

uksort($children, function ($key1, $key2) use ($children) {
    if ($children[$key2] == $children[$key1]) {
        return $key1 <=> $key2;
    }
    return $children[$key2] <=> $children[$key1];
});

echo "Children:" . PHP_EOL;
foreach ($children as $name => $amount) {
    echo "$name -> $amount" . PHP_EOL;
}
echo "Presents:" . PHP_EOL;
foreach ($toys as $toy => $amount) {
    echo "$toy -> $amount" . PHP_EOL;
}