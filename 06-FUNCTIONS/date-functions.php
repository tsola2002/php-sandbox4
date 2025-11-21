<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    <h1>Working With Dates in PHP</h1>
    <?php 
        // echo date('Y/m/j') . '<sup>' . date('S') . '</sup>' . "<br>"; // Outputs current date in YYYY/MM/jS format


        // using strtotime() to convert string to timestamp
        $timestamp = strtotime("next monday");
        echo $timestamp ."<br>";

        echo date("Y-m-d", $timestamp) ."<br>";


        
    ?>
</body>
</html>