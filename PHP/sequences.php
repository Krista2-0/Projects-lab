<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The pyramid</title>
    <style>
        body {
            background: black;
            font-family: 'Courier New', Courier, monospace;
        }

        h1 {
            color: white;
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
    </style>
</head>

<body>

    <div class="stars">
        <h1>Question 1.</h1>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";
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
    </div><br><br>
    <h1>Question 3.</h1>
    <div class="nbr">
        <?php
        $number = 4;
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial = $factorial * $i;
        }
        echo "The factorial of the number = " . $factorial;


        ?><br><br>
        <h1>Question 4.</h1>
        <?php
        for ($first = 0; $first <= 9; $first++) {
            for ($second = 0; $second <= 9; $second++) {
                printf("%02d, ", $first * 10 + $second);
            }
            echo "<br>";
        }


        ?>
    </div>








</body>

</html>
