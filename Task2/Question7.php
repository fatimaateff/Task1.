<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question7</title>
    <style>
        form {

            background-color: aliceblue;
            padding: 40px;
            margin: 0 auto;
            width: 500px;
            border-radius: 10px;
            text-align: center;
            font-family: Arial, sans-serif;

        }

        button {
            background-color: blueviolet;
            color: white;
            font-size: medium;
            padding: 10px 30px;
            border: black;
            border-radius: 25px;

        }
    </style>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <br>
            <label for="a">Enter number A:</label>
            <input type="number" id="a" name="a" min="1" required>
            <br><br>
            <label for="b">Enter number B:</label>
            <input type="number" id="b" name="b" min="1" required>
            <br><br>
            <button type="submit">Find Lucky Numbers</button>
            <br>
            <hr><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $a = $_POST['a'];
                $b = $_POST['b'];


                function isLuckyNumber($num)
                {
                    while ($num > 0) {
                        $digit = $num % 10;
                        if ($digit != 4 && $digit != 7) {
                            return false;
                        }
                        $num = (int)($num / 10);
                    }
                    return true;
                }

                $luckyNumbers = [];

                for ($i = $a; $i <= $b; $i++) {
                    if (isLuckyNumber($i)) {
                        $luckyNumbers[] = $i;
                    }
                }


                if (count($luckyNumbers) > 0) {
                    echo implode("<br>", $luckyNumbers);
                } else {
                    echo "-1";
                }
            }
            ?>

        </fieldset>
    </form>
</body>

</html>