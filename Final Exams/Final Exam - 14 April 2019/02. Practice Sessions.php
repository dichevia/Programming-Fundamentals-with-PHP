<?php

$roads = [];

while (true){
    $input = readline();
    if ($input === 'END'){
        break;
    }
    $args = explode('->', $input);
    $command = $args[0];
    if ($command=='Add'){
        $road = $args[1];
        $racer = $args[2];
        if (!key_exists($road, $roads)){
            $roads[$road][]=$racer;
        }else{
            $roads[$road][]=$racer;
        }
    }
    if ($command=='Move'){
        $currentRoad = $args[1];
        $racer = $args[2];
        $nextRoad = $args[3];
        if (in_array($racer, $roads[$currentRoad])){
            $roads[$nextRoad][] = $racer;
            foreach ($roads[$currentRoad] as $i=>$racerss){
                if ($racerss == $racer){
                    unset($roads[$currentRoad][$i]);
                }
            }
        }
    }
    if ($command == 'Close'){
        $road=$args[1];
        if (key_exists($road, $roads)){
            unset($roads[$road]);
        }
    }
}

uksort($roads, function ($key1, $key2) use ($roads){
    $count1 = count($roads[$key1]);
    $count2 = count($roads[$key2]);
    if ($count1==$count2){
        return $key1<=>$key2;
    }
    return $count2<=>$count1;

});

echo "Practice sessions:".PHP_EOL;
foreach ($roads as $road=>$racers){
    echo "$road".PHP_EOL;

    foreach ($roads[$road] as $member){
        echo "++$member".PHP_EOL;
    }
}