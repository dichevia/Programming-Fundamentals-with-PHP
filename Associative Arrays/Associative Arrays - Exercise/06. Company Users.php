<?php
$companyEmployees = [];

while (true) {
    $input = readline();
    if ($input == "End") {
        break;
    }
    list ($company, $employeeID) = explode(" -> ", $input);
    if (!key_exists($company, $companyEmployees)) {
        $companyEmployees[$company] = [];
    }
    $companyEmployees[$company][] = $employeeID;
}

foreach ($companyEmployees as $comp => $emp) {
    $companyEmployees[$comp] = array_unique($companyEmployees[$comp]);
}

ksort($companyEmployees);

foreach ($companyEmployees as $company => $ID) {
    echo $company . PHP_EOL;
    foreach ($companyEmployees[$company] as $employee) {
        echo "-- " . $employee . PHP_EOL;
    }
}