<?php

$n = intval(readline());
$counter = 0;
$list = [];

while ($counter < $n) {
    $counter++;
    $command = readline();
    $tokens = explode(' ', $command);
    if ($tokens[2] == 'going!') {
        $itIs = in_array($tokens[0], $list);
        if ($itIs) {
            echo "$tokens[0] is already in the list!".PHP_EOL;
        } else {
            $list[] = $tokens[0];
        }

    } else {
        $itIs = in_array($tokens[0], $list);
        if ($itIs) {
            $index = array_search($tokens[0], $list);
            array_splice($list, $index, 1);
        } else {
            echo "$tokens[0] is not in the list!".PHP_EOL;
        }
    }
}

foreach ($list as $el){
    echo $el.PHP_EOL;
}