<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>using exit and die function</title>
</head>
<body>
    <h1>Using Exit & Die Function in PHP</h1>

    <?php 
        $age = 15;

        if ($age < 18){
            //die ("You must be 18 or older to access this page");
             exit ("Exited: You must be 18 or older to access this page");
        }

        echo "Welcome";
    ?>
</body>
</html>