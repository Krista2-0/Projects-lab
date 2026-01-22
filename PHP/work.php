<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pyramid & Forms</title>
    <style>
        body {
            background-color: black;
            font-family: 'Courier New', Courier, monospace;
            color: white;
        }

        h1 {
            font-size: 25px;
        }

        .stars {
            color: lightgray;
            font-size: 20px;
        }

        .nbr {
            color: lightgray;
            font-size: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        table {
            border: 1;
            border-collapse: collapse;
            color: white;
        }

        td {
            border: 1px solid white;
            padding: 6px;
        }

        .container {
            width: 750px;
            margin: 40px auto;
            padding: 40px;
            background-color: #111;
            border: 2px solid #ffffff;
            border-radius: 10px;
        }


        form {
            margin: 10px 0;

        }

        input[type="number"] {
            padding: 5px;
            font-size: 16px;
            width: 200px;

            margin-right: 5px;

        }

        button {
            padding: 5px 10px;

            font-size: 15px;
            cursor: pointer;
            display: inline-block;

            margin-right: 5px;

        }

        .response {
            color: white;

            margin-top: 5px;

            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">


        <div class="stars">
            <h1>Question 1.</h1>
            <?php
            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            echo "<br><br>";
            ?>


            <h1>Question 2.</h1>
            <?php
            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            for ($i = 5; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            ?>
        </div>


        <h1>Question 3.</h1>
        <div class="nbr">
            <?php
            $number = 4;
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
            echo "The factorial of the number = " . $factorial;
            ?>
        </div>


        <h1>Question 4.</h1>
        <div class="nbr">
            <?php
            for ($first = 0; $first <= 9; $first++) {
                for ($second = 0; $second <= 9; $second++) {
                    printf("%02d, ", $first * 10 + $second);
                }
                echo "<br><br>";
            }
            ?>
        </div>


        <h1>Question 5.</h1>
        <table cellpadding="3px" cellspacing="0px">
            <?php
            $rows = 5;
            $cols = 6;
            for ($i = 1; $i <= $rows; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $cols; $j++) {
                    $product = $i * $j;
                    echo "<td>" . $i . "*" . $j . "=" . $product . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>


        <h1>Question 6.</h1>
        <table cellspacing="0px" cellpadding="0px">
            <?php
            $rows = 8;
            $cols = 8;
            for ($i = 1; $i <= $rows; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $cols; $j++) {
                    $color = (($j + $i) % 2 == 0) ? 'black' : 'gray';
                    echo "<td style='background-color: $color; width:30px; height:30px;'></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>


        <h1>Question 7.</h1>
        <table cellpadding="3px" cellspacing="0px">
            <?php
            $rows = 10;
            $cols = 10;
            for ($i = 1; $i <= $rows; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $cols; $j++) {
                    $product = $i * $j;
                    echo "<td>$product</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>


        <h1>Question 8.</h1>
        <div class="stars">
            <?php
            $rows = 7;
            $cols = 5;
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $cols; $j++) {
                    echo ($j == 1 || $j == $cols || $i == 4) ? "*" : " ";
                }
                echo "<br>";
            }
            ?>
        </div>

        <h1>Question 9. Enter Student Marks</h1>
        <form method="post">
            Percentage: <input type="number" name="percentage" step="0.01" min="0" max="100" required><br><br><br>
            <button type="submit" name="submit">Display Grade</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $p = $_POST['percentage'];
            switch (true) {
                case ($p >= 90):
                    $grade = "A";
                    break;
                case ($p >= 80):
                    $grade = "B";
                    break;
                case ($p >= 70):
                    $grade = "C";
                    break;
                case ($p >= 60):
                    $grade = "D";
                    break;
                case ($p >= 50):
                    $grade = "E";
                    break;
                case ($p >= 40):
                    $grade = "F";
                    break;
                case ($p >= 30):
                    $grade = "S";
                    break;
                default:
                    $grade = "U";
            }
            echo "<div style='color:white; margin-top:5px;'>Percentage: $p% <br>Grade: $grade</div>";
        }
        ?><br>
        <?php
        $res = ""; // initialize
        if (isset($_POST['op'])) {
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $op = $_POST['op'];
            switch ($op) {
                case "+":
                    $res = $a + $b;
                    break;
                case "-":
                    $res = $a - $b;
                    break;
                case "*":
                    $res = $a * $b;
                    break;
                case "/":
                    $res = ($b != 0) ? $a / $b : "Cannot divide by zero";
                    break;
            }
        }
        ?>

        <h1>Question 10. Simple Calculator</h1>
        <form method="post">
            First Number: <input type="number" name="num1" step="0.01" required><br><br>
            Second Number: <input type="number" name="num2" step="0.01" required><br><br>
            Result: <input type="text" name="R" value="<?php echo $res; ?>" readonly><br><br>
            <button type="submit" name="op" value="+">+</button>
            <button type="submit" name="op" value="-">−</button>
            <button type="submit" name="op" value="*">×</button>
            <button type="submit" name="op" value="/">÷</button>
        </form>







    </div>
</body>

</html>
