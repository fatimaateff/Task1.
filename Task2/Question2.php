<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question2</title>
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
            <label for="number">enter the number</label>
            <input type="number" name="number" required>
            <br><br>
            <button type="submit">Submit</button>

            <br>
            <hr>
            <br>



            <?php
            if (isset($_POST['number'])) {
                $num = $_POST['number'];
                for ($i = 2; $i <= $num; $i += 2) {
                    echo $i . '<br>';
                }
            }

            ?>
        </fieldset>
    </form>

</body>

</html>