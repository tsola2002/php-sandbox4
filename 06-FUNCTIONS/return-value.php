<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Using Return Values</h1>

    <?php 

    // Defining a basic function with parameters
    // function addNumbers($a, $b) {
    //     echo $a + $b . "<br>";
    // }

    // addNumbers(2, 2);

   
    // using default parameters
    function add($a = 2, $b = 3) {
         $c = 8;
         return $c;
       // $a + $b;
     
    }

    // invoking the function
    //$result = return $c;

    $result = add();

    echo $result;
    
    ?>
</body>
</html>