<?php

$text = explode(', ', readline());

foreach ($text as $i => $ticket) {
    $ticket = trim($ticket);
    if (strlen($ticket) == 20) {
        $left = substr($ticket, 0, 10) . PHP_EOL;
        $right = substr($ticket, 10);
        preg_match_all("/[\@]{6,}|[\#]{6,}|[\\$]{6,}|[\^]{6,}/", $left, $matchLeft);
        preg_match_all("/[\@]{6,}|[\#]{6,}|[\\$]{6,}|[\^]{6,}/", $right, $matchRight);
        if (isset($matchLeft[0][0]) && isset($matchRight[0][0])) {
            $winningString = substr($matchLeft[0][0], 0, 1);
            $min = min(strlen($matchLeft[0][0]), strlen($matchRight[0][0]));
            //ticket "Cash$$$$$$Ca$$$$$$sh" - 6$
            if ($min >= 6 && $min <= 9) {
                echo 'ticket ' . '"' . $ticket . '"' . ' - ' . $min . $winningString . PHP_EOL;
            } else {
                echo 'ticket ' . '"' . $ticket . '"' . ' - ' . $min . $winningString . ' Jackpot!' . PHP_EOL;
            }
        } else {
            echo 'ticket ' . '"' . $ticket . '"' . ' - ' . 'no match' . PHP_EOL;
        }
    } else {
        echo "invalid ticket" . PHP_EOL;
    }
}