<?php

$n = intval(readline());
$dictionary = [];

for ($i = 0; $i < $n; $i++) {
    $word = readline();
    $synonym = readline();
    if (!key_exists($word, $dictionary)) {
        $dictionary[$word] = [];
    }
    $dictionary[$word][] = $synonym;
}
uksort($dictionary, function ($key1, $key2) use ($dictionary) {
    if (count($dictionary[$key1]) != count($dictionary[$key2])) {
        return (count($dictionary[$key2]) <=> count($dictionary[$key1]));
    } else {
        return $key1 <=> $key2;
    }
});
foreach ($dictionary as $word => $synonym) {
    echo $word . ' - ' . implode(', ', $synonym) . PHP_EOL;
}