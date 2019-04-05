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
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    for ($i = $num; $i > 0; $i--) {
        if (isPrime($i) ) {
            echo $i. ' ';
        }
    }
}
?>
</body>
</html>

<?php
function isPrime(int $num):bool
{
    if ($num == 1)
        return false;

    if ($num == 2)
        return true;

    if ($num % 2 == 0) {
        return false;
    }
    $ceil = ceil(sqrt($num));
    for ($i = 3; $i <= $ceil; $i = $i + 2) {
        if ($num % $i == 0)
            return false;
    }

    return true;
}
