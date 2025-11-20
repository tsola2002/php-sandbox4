<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Hinting</title>
</head>
<body>
    <h1>Working With Type Hinting</h1>

    <?php 
    
    // Defining a function with type hinting
    function add(int $a, float $b): bool{
        return $a + $b;
    }

    $result = add(5, 4.2);
    echo var_dump($result);
    
    ?>
</body>
</html>