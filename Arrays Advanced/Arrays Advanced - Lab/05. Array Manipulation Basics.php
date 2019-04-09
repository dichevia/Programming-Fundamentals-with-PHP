<?php

$array = array_map('intval', explode(' ', readline()));
$command = readline();

while($command!='end'){
    $token = explode(' ', $command);
    if ($token[0] == 'Add'){
        $element = intval($token[1]);
        array_push($array, $element);
    }if ($token[0]=='Remove'){
        $element = intval($token[1]);
        $index = array_search($element, $array );
        array_splice($array, $index, 1);
    }if ($token[0]=='RemoveAt'){
        array_splice($array, $token[1], 1);
    }if ($token[0]=='Insert'){
        array_splice($array, $token[2], 0, $token[1]);
    }

    $command = readline();
}

echo implode(' ', $array);