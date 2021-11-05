<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .m-1 {
            margin: 1rem;
        }

        .mx-1 {
            margin: 1rem 0;
        }
    </style>
</head>

<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
if (isset($_GET['reset'])) {
    unset($_GET["name"]);
    unset($_GET["date"]);
    unset($_GET["time"]);
    header("Location: $_SERVER[PHP_SELF]");
}
?>

<body>
    <p class="m-4">Enter your name and select date and time for the appointment</p>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div class="mx-1">
                <label for="name">Name:</label>
                <input type="text" name="name" required="required" placeholder="Enter your name" />
            </div>

            <div>
                <label for="date">Date:</label>
                <input type="date" name="date" value="<?php echo date("Y-m-d"); ?>">
            </div>

            <div class="mx-1">
                <label for="time">Time:</label>
                <input type="time" name="time">
            </div>

            <button type="submit" value="submit">Submit</button>
            <button type="reset" value="reset" name="reset">Reset</button>

        </form>
    <?php else : ?>

        <?php
        function formatTime($t)
        {
            [$h, $m] = explode(":", $t);
            return (($h >= 12 ? 'PM' : 'AM'));
        }
        if (isset($_POST['name'])) {
            $name = htmlspecialchars($_POST['name']);
            $date = $_POST['date'];
            $time = $_POST['time'];
            echo "<br>Hi $name! <br>";
            echo "Your have choose to have an appointment on " . $time . " " . formatTime($time) .  ", " . date('d/m/Y', strtotime($date)) . "<br>";
            echo "<br>More information <br>";

            $newDate = $date . ' ' . $time;
            $dateAfter = date('d/m/Y H:i:s', strtotime('+12 hour', strtotime($newDate)));
            echo "<br>In 12 hours, the time and date is " . $dateAfter . "<br>";
            $month = date('m', strtotime($date));
            $year = date('y', strtotime($date));
            switch ($month) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    $_month = 31;
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    $_month = 30;
                    break;
                case 2:
                    if (!(($year % 4 != 0) || (($year % 100 == 0) && ($year % 400 != 0)))) {
                        $_month = 29;
                    } else {
                        $_month = 28;
                    }
                    break;
                default:
                    echo "<br>Invalid month<br>";
                    break;
            }
            echo "<br>This month has $_month days";
        } else {
            echo 'You need to provide your name.';
        }

        ?>

    <?php endif ?>
</body>

</html>