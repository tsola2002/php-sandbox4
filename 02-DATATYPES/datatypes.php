<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dataypes</title>
</head>
<body>
    <h1>Working With Data Types</h1>
    <?php 
        // CREATING A STRING DATATYPE
        $name = "John Doe";

        // CREATING AN INTEGER DATATYPE
        $age = 25;

        // CREATING A FLOAT DATATYPE
        $pi = 3.14;

        // CREATING A BOOLEAN DATATYPE
        $positive = true;

        echo $name . var_dump($name) . "<br>";

        echo $age . var_dump($age) . "<br>";

        echo $pi . var_dump($pi) . "<br>";

        echo $positive . var_dump($positive) . "<br>";

        // COMPLEX DATA TYPES

        // NUMERIC ARRAYS OR INDEXED ARRAYS
        //$colors = ["Red", "Green", "Yellow"];

        $colors = array("Red","Green","Yellow");


       echo print_r($colors) . "<br>";
       echo var_dump($colors) . "<br>";

       // ASSOCIATIVE ARRAYS
      // $salaries = ["E101" => "10000", "E102" => "20000", "E103" => "30000"];

       echo print_r($salaries) . "<br>";


    ?>
 
</body>
</html>