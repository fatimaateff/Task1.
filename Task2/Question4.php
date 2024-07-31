<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question4</title>
    <style>
        form {

            background-color: aliceblue;
            padding: 20px;
            margin: 0 auto;
            width: 500px;
            border-radius: 10px;
            text-align: left;
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
            <legend>Check prime number </legend>
            <center>
                <h3>Enter number 2 and 500 </h3>
            </center>
            <center>
                <label for="X">Enter the number</label>
                <input type="number" name="X" id="X" required min="2" max="500"><br><br>
                <button type="submit">Check if Prime</button>
                <br>
                <hr><br>
            </center>

            <?php

            $number = 0;
            if (isset($_POST['X'])) {
                $number = (int) $_POST['X'];
            }

            function isPrime($num)
            {
                if ($num <= 1) {
                    return false;
                }
                if ($num == 2) {
                    return true;
                }
                if ($num % 2 == 0) {
                    return false;
                }
                for ($i = 3; $i <= sqrt($num); $i += 2) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }
                return true;
            }


            if ($number >= 2 && $number <= 500) {
                if (isPrime($number)) {
                    echo "<center><h4>YES</h4></center";
                } else {
                    echo "<center><h4>NO</h4></center";
                }
            }
            ?>
        </fieldset>
    </form>




</body>

</html>