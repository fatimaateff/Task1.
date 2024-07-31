<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $number = 5569;
    $number = (int)($number / 1000);
    if ($number % 2 == 0) {
        echo "EVEN";
    } else {
        echo "OOD";
    }
    ?>
</body>

</html>