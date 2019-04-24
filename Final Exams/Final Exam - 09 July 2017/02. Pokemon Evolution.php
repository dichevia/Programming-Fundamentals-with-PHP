<?php

$pokemons = [];
$pokemonsEvolutions = [];

while (true) {
    $input = readline();
    if ($input === 'wubbalubbadubdub') {
        break;
    }
    if (strpos($input, '->')) {
        $args = explode(' -> ', $input);
        $pokemonName = $args[0];
        $evolution = $args[1];
        $index = $args[2];
        $pokemons[$pokemonName] [$index][] = $evolution;
        $pokemonsEvolutions[$pokemonName] [] = $evolution . " <-> " . $index;

    } else {
        $pokemonToPrint = $input;
        if (key_exists($pokemonToPrint, $pokemonsEvolutions)) {
            echo '# ' . $pokemonToPrint . PHP_EOL;
            foreach ($pokemonsEvolutions[$pokemonToPrint] as $element) {
                echo $element . PHP_EOL;
            }
        }
    }
}

foreach ($pokemons as $name => $values) {
    echo '# ' . $name . PHP_EOL;
    krsort($values);
    foreach ($values as $index => $data) {
        foreach ($data as $pokemon) {
            echo "$pokemon <-> $index" . PHP_EOL;
        }
    }
}