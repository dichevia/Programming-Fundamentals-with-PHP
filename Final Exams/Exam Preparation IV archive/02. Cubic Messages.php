<?php

$pattern = '/^(?<before>[0-9]+)(?<message>[a-zA-Z]+)(?<after>[^a-zA-Z]*)$/';

while (true) {
    $output = '';
    $input = readline();
    if ($input === 'Over!') {
        break;
    }
    $number = readline();
    if (preg_match($pattern, $input, $matches)) {
        if (strlen($matches['message']) === intval($number)) {
            $before = $matches['before'];
            $message = $matches['message'];
            $after = $matches['after'];
            for ($i = 0; $i < strlen($before); $i++) {
                $currentIndex = intval($before[$i]);
                if ($currentIndex >= 0 && $currentIndex < strlen($message)) {
                    $output .= $message[$currentIndex];
                } else {
                    $output .= ' ';
                }
            }
            for ($i = 0; $i < strlen($after); $i++) {
                $currentIndex = ($after[$i]);
                if ((filter_var($currentIndex, FILTER_VALIDATE_INT) !== false) && ($currentIndex >= 0 && $currentIndex < strlen($message))) {
                    $currentIndex = intval($after[$i]);
                    $output .= $message[$currentIndex];
                } else {
                    $output .= ' ';
                }
            }
            echo "$message == $output" . PHP_EOL;
        }
    }
}