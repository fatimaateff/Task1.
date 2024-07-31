<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Printer</title>
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
    <form method="post" action="">
        <fieldset>
            <label for="number">Enter a number:</label>
            <input type="number" id="number" name="number" min="1" max="103" required>
            <br><br>

            <button type="submit">Submit</button>
            <br>
            <hr><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $n = (int)$_POST['number'];

                for ($i = 1; $i <= $n; $i++) {
                    echo $i . "<br>";
                }
            }
            ?>
        </fieldset>

    </form>
</body>

</html>