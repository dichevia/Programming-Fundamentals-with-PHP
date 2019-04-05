<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php

if (isset($_GET["num"])) {
    $sum = $_GET["num"];
    $arr = [];

    for ($i = 1; $i <= $sum; $i++) {
        if ($i % 2 == 0) {
            $arr[] = $i;
        }
    }
    echo implode(' ', $arr);
}

?>
</body>
</html>

