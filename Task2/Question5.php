<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question5</title>
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
            <label for="number">Enter a number:</label>
            <input type="text" id="num" name="number" required>
            <br /><br />
            <button type="submit">Submit</button>
            <br>
            <hr><br>

            <?php

            if (isset($_POST['number'])) {
                $number =  $_POST['number'];

                $reversed = '';
                $length = strlen($number);
                for ($i = $length - 1; $i >= 0; $i--) {
                    $reversed .= $number[$i];
                }
                $isPalindrome = ($number === $reversed) ? 'YES' : 'NO';
                echo "<center><h4>Reversed Number: $reversed</h4></center";
                echo "<center><h4>Is Palindrome: $isPalindrome</h4></center";
            }
            ?>
        </fieldset>
    </form>

</body>

</html>