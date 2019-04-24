<?php

$events = [];
$identifications = [];
$pattern = '/^\s*[0-9]+\s+#\s*[\w]+(\s*@\s*[A-Za-z0-9-\']+\s*)*$/';

while (true) {
    $input = trim(readline());
    if ($input === 'Time for Code') {
        break;
    }
    if (preg_match_all($pattern, $input, $matches, PREG_SET_ORDER, 0)) {
        $input = explode(' ', $input);
        $input = array_values(array_filter($input));
        $id = trim($input[0]);
        $eventName = trim(str_replace('#', '', $input[1]));
        if (!key_exists($id, $identifications)) {
                $identifications [$id][$eventName] = [];
                for ($i = 2; $i < count($input); $i++) {
                    $identifications [$id][$eventName][] = trim($input[$i]);
                }
            $identifications [$id][$eventName] = array_unique($identifications [$id][$eventName]);

        } else {
            foreach ($identifications as $ids => $groups) {
                foreach ($groups as $group=>$members  ){
                    if ($ids == $id && $group == $eventName) {
                        for ($i = 2; $i < count($input); $i++) {
                            $identifications [$id][$eventName][] = trim($input[$i]);
                        }
                        $identifications [$id][$eventName] = array_unique($identifications [$id][$eventName]);
                    }
                }

            }
        }
    }
}

var_dump($identifications);

foreach ($identifications as $key => $events) {
    uksort($events, function ($key1, $key2) use ($events) {
        $countParticipants1 = count($events[$key1]);
        $countParticipants2 = count($events[$key2]);
        if ($countParticipants2 == $countParticipants1) {
            return $key1 <=> $key2;
        }
        return $countParticipants2 <=> $countParticipants1;
    });
    foreach ($events as $event=>$members)
    $count = count($members);
    echo "$event - $count" . PHP_EOL;
    natcasesort($members);
    foreach ($members as $participant) {
        echo "$participant" . PHP_EOL;
    }
}