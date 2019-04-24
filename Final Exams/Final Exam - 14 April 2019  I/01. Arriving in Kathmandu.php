<?php

$pattern = '/^(?<name>[A-Za-z0-9!@#$?]+)=(?<geohashcode>[0-9]+)<<(?<code>.*)$/';

while (true) {
    $input = readline();
    if ($input === "Last note") {
        break;
    }
    if (preg_match($pattern, $input, $matches)) {
        if ($matches['geohashcode'] == strlen($matches['code'])) {
            $name = $matches['name'];
            $filteredName = '';
            $geohashcode = $matches['code'];
            for ($i = 0; $i <strlen($name) ; $i++){
                $currSymbol = $name[$i];
                if (ctype_alnum($currSymbol)!==false){
                    $filteredName.=$currSymbol;
                }
            }
            echo "Coordinates found! $filteredName -> $geohashcode" . PHP_EOL;
        } else {
            echo "Nothing found!" . PHP_EOL;
        }
    } else {
        echo "Nothing found!" . PHP_EOL;
    }
}