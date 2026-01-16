<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Basics</title>
</head>

<body style="background-color: yellow;">
<?php
    $a = 20;
    $b = 10;

    $result = ($a >= $b) ? "A is greater than B" : "B is greater than A";
    echo $result . "<br>";

    echo $_SERVER['PHP_SELF'] . "<br>";
    echo $_SERVER['HTTP_HOST'] . "<br>";
    echo $_SERVER['SERVER_NAME'] . "<br>";
    echo $_SERVER['REMOTE_PORT'] . "<br>";
    echo $_SERVER['REMOTE_ADDR'] . "<br>";
    echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
?>
</body>
</html>
