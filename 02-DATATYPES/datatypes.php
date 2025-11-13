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

        $age = 30;

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

        $salaries = array("E101" => "10000", "E102" => "20000", "E103" => "30000");

      // echo print_r($salaries) . "<br>";

      echo $salaries['E103'] . "<br>";

      // CREATING A CONSTANT
      define("PI","3.14");

    
      // CREATING A MULTIDIMENSIONAL ARRAY
        // $flowers = [
        //     "category1" => ["Lotus", 2.25, 10],
        //     "category2" => ["White Rose", 5.25, 20],
        //     "category3" => ["Lily", 10.25, 30],
        // ];

        print_r($flowers);
    ?>
 
</body>
</html>