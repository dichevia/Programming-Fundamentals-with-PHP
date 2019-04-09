<?php

$array = explode(', ', readline());
$commands = readline();

while ($commands !== 'course start') {
    $tokens = explode(':', $commands);
    if ($tokens[0] === 'Add') {
        $exist = false;
        foreach ($array as $element) {
            if ($element === $tokens[1]) {
                $exist = true;
            }
        }
        if (!$exist) {
            $array[] = $tokens[1];
        }
    } elseif ($tokens[0] === 'Insert') {
        $exist = false;
        foreach ($array as $element) {
            if ($element === $tokens[1]) {
                $exist = true;
            }
        }
        if (!$exist) {
            array_splice($array, $tokens[2], 0, $tokens[1]);
        }
    } elseif ($tokens[0] === 'Remove') {
        $exist = false;
        $index = 0;
        foreach ($array as $i => $element) {
            if ($element === $tokens[1]) {
                $exist = true;
                $index = $i;
            }
        }
        if ($exist) {
            if ($array[$index + 1] === "$tokens[1]" . "-Exercise") {
                array_splice($array, $index + 1, 1);
            }
            array_splice($array, $index, 1);

        }
    } elseif ($tokens[0] === 'Swap') {
        $exist1 = false;
        $exist2 = false;
        $index1 = 0;
        $index2 = 0;
        foreach ($array as $i => $element) {
            if ($element === $tokens[1]) {
                $exist1 = true;
                $index1 = $i;
            }
        }
        foreach ($array as $i => $element) {
            if ($element === $tokens[2]) {
                $exist2 = true;
                $index2 = $i;
            }
        }
        if ($exist1 && $exist2) {
            $lessOne = array_splice($array, $index1, 1, $tokens[2]);
            array_splice($array, $index2, 1, $lessOne);
            if ($array[$index1 + 1] === "$tokens[1]" . "-Exercise") {
                array_splice($array, $index1 + 1, 1);
                foreach ($array as $i => $element) {
                    if ($element === $tokens[1]) {
                        array_splice($array, $i + 1, 0, "$tokens[1]" . "-Exercise");
                    }
                }
            }
            if ($array[$index2 + 1] === "$tokens[2]" . "-Exercise") {
                array_splice($array, $index2 + 1, 1);
                foreach ($array as $i => $element) {
                    if ($element === $tokens[2]) {
                        array_splice($array, $i + 1, 0, "$tokens[2]" . "-Exercise");
                    }
                }
            }
        }
    } elseif ($tokens[0] === 'Exercise') {
        $exist = false;
        foreach ($array as $i => $element) {
            if ($element === $tokens[1]) {
                $exist = true;
                $indexEx = $i;
            }
        }
        if ($exist && $array[$indexEx + 1] !== "$tokens[1]" . "-Exercise") {
            array_splice($array, $indexEx + 1, 0, $tokens[1] . "-Exercise");
        }
        if (!$exist) {
            $exercise = $tokens[1] . "-Exercise";
            array_push($array, $tokens[1], $exercise);
        }
    }

    $commands = readline();
}

foreach ($array as $i => $element) {
    printf("%d.%s" . PHP_EOL, $i + 1, $element);
}



/*
$schedule = explode(', ', readline());

while (true) {
    $input = readline();
    if ($input === 'course start') {
        break;
    }
    $token = explode(':', $input);
    $command = $token[0];
    if ($command === 'Add') {
        $lesson = $token[1];
        if (in_array($lesson, $schedule) === false) {
            $index = array_search($lesson, $schedule);
            $schedule[] = $lesson;
        }
    }
    if ($command === 'Insert') {
        $lesson = $token[1];
        $indexToInsert = $token[2];
        if (in_array($lesson, $schedule) === false) {
            array_splice($schedule, $indexToInsert, 0, $lesson);
        }
    }
    if ($command === 'Remove') {
        $lesson = $token[1];
        if (in_array($lesson, $schedule) !== false) {
            $index = array_search($lesson, $schedule);
            array_splice($schedule, $index, 1);
        }
        if (in_array($lesson . '-Exercise', $schedule)) {
            $indexEx = array_search($lesson . '-Exercise', $schedule);
            array_splice($schedule, $indexEx, 1);
        }
    }
    if ($command === 'Swap') {
        $lesson1 = $token[1];
        $lesson2 = $token[2];
        if (in_array($lesson1, $schedule) !== false && in_array($lesson2, $schedule) !== false) {
            $index1 = array_search($lesson1, $schedule);
            $index2 = array_search($lesson2, $schedule);
            array_splice($schedule, $index1, 1, $lesson2);
            array_splice($schedule, $index2, 1, $lesson1);
        }
        if (in_array($lesson1 . '-Exercise', $schedule)) {
            $indexEx1 = array_search($lesson1 . '-Exercise', $schedule);
            array_splice($schedule, $indexEx1, 1);
            array_splice($schedule, $index2 + 1, 0, $lesson1 . '-Exercise');
        }
        if (in_array($lesson2 . '-Exercise', $schedule)) {
            $indexEx2 = array_search($lesson2 . '-Exercise', $schedule);
            array_splice($schedule, $indexEx2, 1);
            array_splice($schedule, $index1 + 1, 0, $lesson2 . '-Exercise');
        }
    }
    if ($command === 'Exercise') {
        $lesson = $token[1];
        if (in_array($lesson, $schedule) !== false) {
            $index = array_search($lesson, $schedule);
            if (in_array($lesson . '-Exercise', $schedule) === false) {
                array_splice($schedule, $index + 1, 0, $lesson . '-Exercise');
            }
        } else {
            $schedule[] = $lesson;
            $schedule[] = $lesson . '-Exercise';
        }
    }
}
$counter = 0;
foreach ($schedule as $value) {
    $counter++;
    echo $counter . '.' . $value . PHP_EOL;
}*/