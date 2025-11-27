<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>View Session In PHP</h1>

    <?php 
        echo "Welcome " . $_SESSION["username"];
    ?>
</body>
</html>