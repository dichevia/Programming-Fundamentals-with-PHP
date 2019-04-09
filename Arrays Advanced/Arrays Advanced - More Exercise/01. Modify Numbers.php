<?php

$array = array_map('intval', explode(' ', readline()));
$commands = readline();

while ($commands !== 'end'){
    $tokens = explode(' ', $commands);
    if ($tokens[0] ==='swap'){
        $temp1 = $array[$tokens[1]];
        $temp2 = $array[$tokens[2]];
        foreach ($array as $i=>$element){

            if ($i == $tokens[1]){
                array_splice($array, $i, 1, $temp2);
            }
            if ($i == $tokens[2]){
                array_splice($array, $i, 1, $temp1);
            }
        }

    }if ($tokens[0] ==='multiply'){
        $temp1M = $array[$tokens[1]];
        $temp2M = $array[$tokens[2]];
        array_splice($array, $tokens[1], 1, $array[$tokens[1]]*$array[$tokens[2]]);
    }if ($tokens[0] ==='decrease'){
        $newValue=0;
        foreach ($array as $j=>$value){
            $newValue = intval($array[$j]) - intval($tokens[1]);
            array_splice($array, $j, 1, $newValue);
        }
    }if ($tokens[0] ==='increase'){
        $newValue=0;
        foreach ($array as $j=>$value){
            $newValue = intval($array[$j]) + intval($tokens[1]);
            array_splice($array, $j, 1, $newValue);
        }
    }if ($tokens[0] ==='remove'){
        array_splice($array, $tokens[1],1);
    }

    $commands = readline();
}

echo implode(', ', $array);