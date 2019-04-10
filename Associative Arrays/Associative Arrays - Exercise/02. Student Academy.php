<?php

$n = intval(readline());
$studentsGrades = [];

for ($i = 0; $i < $n; $i++) {
    $name = readline();
    $grade = floatval(readline());
    if (!key_exists($name, $studentsGrades)) {
        $studentsGrades[$name] = [];
    }
    $studentsGrades[$name][] = $grade;
}

$results = [];

foreach ($studentsGrades as $name => $grades) {
    $averageGrade = number_format(array_sum($grades) / count($grades), 2, '.', '');
    if ($averageGrade >= 4.5) {
        $results[$name] = $averageGrade;
    }
}

arsort($results);

foreach ($results as $name => $averageGrade) {
    echo $name . " -> " . $averageGrade . PHP_EOL;
}