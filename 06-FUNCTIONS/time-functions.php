<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time</title>
</head>
<body>
    <h1>Working With Time Functions</h1>

    <?php 

        $current_time = time();
        echo $current_time  . "<br>"; // Outputs current Unix timestamp

        echo date("h:i:s A", $current_time) . "<br>";

        echo microtime(true);

        // echo "Start";
        // sleep(5);
        // echo "Finished After 5 seconds";
    ?>
</body>
</html>