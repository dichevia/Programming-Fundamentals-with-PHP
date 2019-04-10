<?php

$pokerPlayers = [];

while (true) {
    $input = readline();
    if ($input == 'JOKER') {
        break;
    }
    list($name, $cards) = explode(': ', $input);
    if (!key_exists($name, $pokerPlayers)) {
        $pokerPlayers[$name] = '';
    }
    $pokerPlayers[$name] .= ', ' . $cards;
}
foreach ($pokerPlayers as $name => $cards) {
    $pokerPlayers[$name] = explode(', ', $cards);
}
foreach ($pokerPlayers as $name => $cards) {
    $pokerPlayers[$name] = array_unique($cards);

}
foreach ($pokerPlayers as $name => $cards) {
    $pokerPlayers[$name] = array_filter($cards);

}
foreach ($pokerPlayers as $name => $cards) {
    $pokerPlayers[$name] = array_values($cards);

}


$playersResults = [];
foreach ($pokerPlayers as $name => $cards) {
    for ($i = 0; $i < count($cards); $i++) {
        $currentCard = $cards[$i];
        $power = $currentCard[0];
        $multiplier = $currentCard[1];
        if (strlen($currentCard) > 2) {
            $power = 10;
            $multiplier = $currentCard[2];
        }
        switch ($power) {
            case 'J':
                $power = 11;
                break;
            case 'Q':
                $power = 12;
                break;
            case 'K':
                $power = 13;
                break;
            case 'A':
                $power = 14;
                break;
        }
        switch ($multiplier) {
            case 'S':
                $multiplier = 4;
                break;
            case 'H':
                $multiplier = 3;
                break;
            case 'D':
                $multiplier = 2;
                break;
            case 'C':
                $multiplier = 1;
                break;
        }
        $playersResults[$name][] = $power * $multiplier;
    }
}

foreach ($playersResults as $name => $points) {
    echo $name . ': ' . array_sum($points) . PHP_EOL;
}




//$pokerPlayers = [];
//
//while (true) {
//    $input = readline();
//    if ($input == 'JOKER') {
//        break;
//    }
//    list($name, $cards) = explode(': ', $input);
//    $cards = explode(', ', $cards);
//    if (!key_exists($name, $pokerPlayers)) {
//        $pokerPlayers[$name] = [];
//    }
//    $pokerPlayers[$name] []=  $cards;
//}
//
//
//
//foreach ($pokerPlayers as $name => $cards) {
//    $pokerPlayers[$name] = array_merge($pokerPlayers[$name][0], $pokerPlayers[$name][1]);
//}
//
//foreach ($pokerPlayers as $name => $cards) {
//    $pokerPlayers[$name] = array_unique($cards);
//}
//foreach ($pokerPlayers as $name => $cards) {
//    $pokerPlayers[$name] = array_filter($cards);
//
//}
//foreach ($pokerPlayers as $name => $cards) {
//    $pokerPlayers[$name] = array_values($cards);
//
//}
//
//
//$playersResults = [];
//foreach ($pokerPlayers as $name => $cards) {
//    for ($i = 0; $i <count($cards); $i++) {
//        $currentCard = $cards[$i];
//        $power = $currentCard[0];
//        $multiplier = $currentCard[1];
//        if (strlen($currentCard)>2){
//            $power=10;
//            $multiplier = $currentCard[2];
//        }
//        switch ($power) {
//            case 'J':
//                $power = 11;
//                break;
//            case 'Q':
//                $power = 12;
//                break;
//            case 'K':
//                $power = 13;
//                break;
//            case 'A':
//                $power = 14;
//                break;
//            case '10':
//                $power = 10;
//                break;
//        }
//        switch ($multiplier) {
//            case 'S':
//                $multiplier = 4;
//                break;
//            case 'H':
//                $multiplier = 3;
//                break;
//            case 'D':
//                $multiplier = 2;
//                break;
//            case 'C':
//                $multiplier = 1;
//                break;
//        }
//        $playersResults[$name][] = $power * $multiplier;
//    }
//}
//
//foreach ($playersResults as $name => $points) {
//    echo $name . ': ' . array_sum($points) . PHP_EOL;
//}