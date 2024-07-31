<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $number = 39;
    $FD = (int)($number / 10);
    $LD = $number % 10;
    if ($FD % $LD == 0 || $LD % $FD == 0) {
        echo "YES";
    } else {
        echo "NO";
    }
    ?>

</body>

</html>