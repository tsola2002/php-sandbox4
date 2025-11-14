<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typecasting</title>
</head>
<body>
    <h1>Type casting in php</h1>

    <?php 
        // CONVERTING TO INTEGER
        echo "<strong>Converting to Integer</strong>" . "<br><br>";
        echo var_dump((int)true) . "<br>"; // -> 1
        echo var_dump((int)false) . "<br>"; // -> 0
        echo var_dump((int)"Hello") . "<br>"; // -> 0
        echo var_dump((int)"12 Months") . "<br>"; // -> 12
        echo var_dump((int)12.7) . "<br>"; // -> 12
        echo var_dump((int)null) . "<br><br>"; // -> 0

        echo "<strong>Converting to String</strong>" . "<br><br>";

        // CONVERTING TO STRING
        echo var_dump((string)false) . "<br>"; // -> ""
        echo var_dump((string)true) . "<br>"; // -> "1"
        echo var_dump((string)0) . "<br>"; // -> "0"
        echo var_dump((string)1.353) . "<br><br>"; // -> "1.353"

        echo "<strong>Converting to Boolean</strong>" . "<br><br>";

        echo var_dump( (bool)"") . "<br>"; // -> false
        echo var_dump( (bool)"Some Text") . "<br>"; // -> true
        echo var_dump( (bool)"0") . "<br>"; // -> false
        echo var_dump( (bool)"false") . "<br>"; // -> true
        echo var_dump( (bool)0) . "<br>"; // -> false
        echo var_dump( (bool)1) . "<br>"; // -> true
        echo var_dump( (bool)-1) . "<br>"; // -> true
        echo var_dump( (bool)0.5) . "<br>"; // -> true
        echo var_dump( (bool)0.0) . "<br>"; // -> false
        echo var_dump( (bool)null) . "<br>"; // -> false
        echo var_dump( (bool)[]) . "<br>"; // -> false
        echo var_dump( (bool)["hello"]) . "<br>"; // -> true

    ?>
</body>
</html>