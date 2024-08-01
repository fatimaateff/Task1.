<!DOCTYPE html>
<html>

<head>
    <title>Question1</title>
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
            <br />

            <input type="text" id="radius" name="radius" placeholder="radius">

            <br><br>

            <input type="text" id="color" name="color" placeholder="color">
            <br>
            <br>
            <button type="submit"> calculate</button>
            <br>
            <hr><br>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $radius = !empty($_POST["radius"]) ? $_POST["radius"] : 1.0;
                $color = !empty($_POST["color"]) ? $_POST["color"] : "red";

                class Circle
                {
                    protected $radius;
                    protected $color;

                    public function __construct($radius = 1.0, $color = "red")
                    {
                        $this->radius = $radius;
                        $this->color = $color;
                    }

                    public function getRadius()
                    {
                        return $this->radius;
                    }

                    public function getColor()
                    {
                        return $this->color;
                    }

                    public function getArea()
                    {
                        return pi() * pow($this->radius, 2);
                    }

                    public function setRadius($radius)
                    {
                        $this->radius = $radius;
                    }

                    public function setColor($color)
                    {
                        $this->color = $color;
                    }
                }

                $circle = new Circle($radius, $color);

                echo "<h3>Circle Details:</h3>";
                echo "<h5>Radius: " . $circle->getRadius() . "</h5>";
                echo "<h5>Color: " . $circle->getColor() . "</h5>";
                echo "<h5>Area: " . $circle->getArea() . "</h5>";
            }
            ?>
        </fieldset>
    </form>
</body>

</html>
