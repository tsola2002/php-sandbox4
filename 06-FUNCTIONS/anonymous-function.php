<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Function</title>
</head>
<body>
    <h1>Working With Anonymous Functions</h1>

    <?php 
    
        // function greet($name) {
        //     return "Hello, $name";
        // }
        // echo greet("John");

        // ANONYMOUS FUNCTION
        $greet = function($name) {
            return "Hello, $name";
        };
        echo $greet("Favour");
    ?>
</body>
</html>