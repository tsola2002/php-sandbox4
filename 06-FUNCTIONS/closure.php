<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closure</title>
</head>
<body>
    <h1>Working With Closures</h1>

    <?php 
        $greeting = "Hello";

        $welcomeUser = function($name) use( $greeting)  {
            return "$greeting, $name";
        };

        echo $welcomeUser("Favour");
    ?>
</body>
</html>