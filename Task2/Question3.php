<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Maximum Number</title>
    <style>
        form {

            background-color: aliceblue;
            padding: 20px;
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
    <form method="post" action="">
        <fieldset>
            <br>
            <label for="count">Enter the number of elements :</label>
            <input type="number" id="count" name="count" min="1" max="20" required>
            <br><br>
            <label for="numbers">Enter the numbers :</label>
            <input type="text" id="numbers" name="numbers" required>
            <br><br>
            <button type="submit">Find Maximum</button>
            <br>
            <hr><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $n = (int)$_POST['count'];
                $numbers = explode(' ', $_POST['numbers']);


                if (count($numbers) != $n) {
                    echo "The number of elements does not match N.";
                    exit;
                }




                $max = max($numbers);


                echo $max;
            }
            ?>
        </fieldset>

    </form>
</body>

</html>