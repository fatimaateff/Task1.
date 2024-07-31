<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question8</title>
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
            <label for="number">Enter the number of rows :</label>
            <input type="number" id="number" name="number" min="1" max="99" required><br><br>
            <button type="submit">creat</button>
            <br>
            <hr><br>
            <?php
            if (isset($_POST['number'])) {
                $n = $_POST['number'];

                for ($i = 1; $i <= $n; $i++) {
                    echo str_repeat('*', $i) . "<br>";
                }
            }

            ?>
        </fieldset>
    </form>
</body>

</html>