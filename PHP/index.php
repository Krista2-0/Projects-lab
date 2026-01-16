<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TempSwitch </title>

    <style>
        body {
            color: lightgrey;
            background-color: black;
            font-size: 20px;
            font-family: calibri;
            text-align: justify;
            line-height: 1.5;

        }
         
        h1{
            color: peachpuff;
            font-size: 45px;
            font-family:algerian ;
            text-align: center;
            
        }
        b{
            color: white;
        }

        h5{
            color:lightblue;
            font-weight: normal;
        }



    </style>
</head>
<body>
    <h1> TempSwitch!</h1>

    <br><hr><br>
    <p>
        <b>Welcome to TempSwitch!</b> Ever get confused whether 80°F is hot or just mildly warm? Say goodbye to guesswork! With TempSwitch, converting Fahrenheit to Celsius is lightning-fast, super simple, and even a little fun. Tap, convert, and know your temperature in a snap—perfect for weather, cooking, or just impressing your friends with your temperature smarts!
    </p>
    <br> 

    <form method="POST">
        <label>Enter the temperature in Fahrenheit: </label>
        <input type="number" name="fahrenheit" step="any" required>
        <button type="submit">convert</button>
        <a href="index.php"><button type="button">Clear</button></a>
    </form>
    <?php
   
    if (isset($_POST['fahrenheit'])){
    $fahrenheit = $_POST['fahrenheit'];
    $celsius = ($fahrenheit-32)*5/9;
    $celsius = round($celsius, 2);
    if ($celsius <= 0) $emoji= "❄️";
    elseif ($celsius <= 25) $emoji= "🌤️";
    else $emoji = "🔥";
    echo "<h5>The temperature in celsius is: $celsius °C $emoji<h5>";

    }

    ?>
</body>
</html>
