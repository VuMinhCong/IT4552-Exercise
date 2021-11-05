<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="radio" name="choice" value="0" />
            <label>Radians to Degrees</label>
            <input type="radio" name="choice" value="1" />
            <label>Degrees to Radians</label>
            <br>
            <input type="text" name="number" required />
            <input type="submit" value="Submit">
            <input type="submit" value="Reset" name="reset">
        </form>
    <?php else : ?>
        <?php
        function toDeg($rad)
        {
            $_deg = $rad * 180 / M_PI;
            return $_deg;
        }
        function toRad($deg)
        {
            $_rad = $deg * M_PI / 180;
            return $_rad;
        }
        if (isset($_POST["choice"]) && is_numeric($_POST["number"])) {
            $choice =  $_POST["choice"];
            $number = $_POST["number"];
            echo "<h1>Result</h1>";
            switch ($choice) {
                case 0:
                    $temp = toDeg($number);
                    echo "<br>$number <i>rad</i> ≈ " . number_format($temp, 4) . "°";
                    echo "<br><mark>Formula</mark>: $number <i>rad</i> × 180/π ≈ " . number_format($temp, 4) . "°";
                    break;
                case 1:
                    $temp = toRad($number);
                    echo "<br>$number<i>°</i> ≈ " . number_format($temp, 4) . " <i>rad</i>";
                    echo "<br><mark>Formula</mark>: $number<i>°</i> × π/180 ≈ " . number_format($temp, 4) . " <i>rad</i>";
                    break;
                default:
                    break;
            }
        }
        if (isset($_POST['reset'])) {
            unset($_POST["number"]);
            header("Location: $_SERVER[PHP_SELF]");
        }
        ?>
    <?php endif ?>
</body>

</html>