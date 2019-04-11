<?php

$list = explode('&', readline());

while (true) {
    $input = readline();
    if ($input == "Finished!") {
        break;
    }
    $token = explode(' ', $input);
    $command = $token[0];
    if ($command == 'Bad') {
        $kidName = $token[1];
        if (in_array($kidName, $list) === false) {
            array_unshift($list, $kidName);
        }
    }
    if ($command == 'Good') {
        $kidName = $token[1];
        if (in_array($kidName, $list) !== false) {
            $index = array_search($kidName, $list);
            array_splice($list, $index, 1);
        }
    }
    if ($command == 'Rename') {
        $oldName = $token[1];
        $newName = $token[2];
        if (in_array($oldName, $list) !== false) {
            $index = array_search($oldName, $list);
            array_splice($list, $index, 1, $newName);
        }
    }
    if ($command == 'Rearrange') {
        $kidName = $token[1];
        if (in_array($kidName, $list) !== false) {
            $index = array_search($kidName, $list);
            array_splice($list, $index, 1);
            $list[] = $kidName;
        }
    }
}

echo implode(', ', $list);