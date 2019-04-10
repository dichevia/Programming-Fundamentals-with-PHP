<?php

$courses = [];

while (true) {
    $input = readline();
    if ($input == 'end') {
        break;
    }
    list($courseName, $studentName) = explode(' : ', $input);
    if (!key_exists($courseName, $courses)) {
        $courses[$courseName] = [];
    }
    $courses[$courseName][] = $studentName;
}

uksort($courses, function ($key1, $key2) use ($courses) {
    $count1 = count($courses[$key1]);
    $count2 = count($courses[$key2]);
    return $count2 <=> $count1;
});

foreach ($courses as $course => $students) {
    echo $course . ': ' . count($students) . PHP_EOL;
    asort($students);
    foreach ($students as $student) {
        echo '-- ' . $student . PHP_EOL;
    }
}