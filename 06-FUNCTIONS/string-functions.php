<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Working With String Functions</h1>

    <?php 

    $activity = "I'M GOING TO PARTY TONIGHT";

    echo strlen($activity) . "<br>"; // Outputs length of the string

    // make everthing uppercase
    echo strtoupper($activity) . "<br>";

    // MAKE EVERYTHING lowercase
    echo strtolower($activity) . "<br>";
    
    ?>
</body>
</html>