<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question6</title>
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
    <form action="" method="POST">
        <fieldset>
            <br>
            <label for="number">Enter a number:</label>
            <input type="number" id="number" name="number" min="1" max="10000" required><br><br>
            <button type="submit">Submit</button>
            <br>
            <hr><br>
            <?php

            if (isset($_POST['number'])) {
                $number = $_POST['number'];

                if ($number < 1 || $number > 10000) {
                    echo "Number must be between 1 and 10,000.";
                    exit;
                }




                for ($i = 1; $i <= $number; $i++) {
                    if ($number % $i == 0) {

                        echo $i . "<br>";
                    }
                }
            }


            ?>
        </fieldset>
    </form>
</body>

</html>