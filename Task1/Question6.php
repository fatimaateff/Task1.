<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $Memo = 20;
    $Momo = 10;
    $K = 5;
    if ($Memo % $K == 0 && $Momo % $K == 0) {
        echo "BOTH";
    } else if ($Memo % $K == 0 && $Momo % $K != 0) {
        echo "Memo";
    }
    if ($Memo % $K != 0 && $Momo % $K == 0) {
        echo "Momo";
    }
    ?>
</body>

</html>