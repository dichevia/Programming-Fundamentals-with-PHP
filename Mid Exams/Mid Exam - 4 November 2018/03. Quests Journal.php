<?php

$journal = explode(', ', readline());

while (true) {
    $input = readline();
    if ($input == 'Retire!') {
        break;
    }
    list($cmd, $quest) = explode(' - ', $input);
    if ($cmd == 'Start') {
        if (in_array($quest, $journal) === false) {
            $journal[] = $quest;
        }
    }
    if ($cmd == 'Complete') {
        if (in_array($quest, $journal) !== false) {
            $index = array_search($quest, $journal);
            array_splice($journal, $index, 1);
        }
    }
    if ($cmd == 'Renew') {
        if (in_array($quest, $journal) !== false) {
            $index = array_search($quest, $journal);
            array_splice($journal, $index, 1);
            $journal[] = $quest;

        }
    }
    if ($cmd == 'Side Quest') {
        list($mainQuest, $sideQuest) = explode(':', $quest);
        if (in_array($mainQuest, $journal) !== false) {
            $index = array_search($mainQuest, $journal);
            if (in_array($sideQuest, $journal) === false) {
                array_splice($journal, intval($index) + 1, 0, $sideQuest);
            }
        }
    }
}

echo implode(', ', $journal);