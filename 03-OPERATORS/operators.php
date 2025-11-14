<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <h1>Working With Operators</h1>

    <?php 
    
        $a = 10;
        $b = 10;

        // ARITHMETIC OPERATORS
        echo "Basic Addition: " . $a + $b . "<br>";
        echo "Basic Subtraction: " . $a - $b . "<br>";
        echo "Basic Multiplication: " . $a * $b . "<br>";
        echo "Basic Division: " . $a / $b . "<br>";
        echo "Basic Modulus: " . $a % $b . "<br>";

        // INCREMENT/DECREMENT OPERATORS
        $f = 2;
        echo "Post Increment of 2 is : ". $f++ ."<br>";

        $e = 3;
        echo "Pre Increment of 3 is : ". ++$e ."<br>";

        $g = 4;
        echo "Post Decrement of 4 is : ". $g-- ."<br>";

        $h = 5;
        echo "Pre Decrement of 5 is : ". --$h ."<br>";

        $var1 = "14";
        $var2 = 14;

        // COMPARISON OPERATORS
        echo "loose equality operator: ";
        echo var_dump($var1 == $var2) . "<br>";

        echo "strict equality operator: ";
        echo var_dump($var1 === $var2) . "<br>";

        echo "greater than operator: ";
        echo var_dump($var1 > $var2) . "<br>";

        echo "greater than equals to operator: ";
        echo var_dump($var1 >= $var2) . "<br>";

        echo "less than operator: ";
        echo var_dump($var1 < $var2) . "<br>";

        echo "less than equals to operator: ";
        echo var_dump($var1 <= $var2) . "<br>";

        echo "not equals to operator: ";
        echo var_dump($var1 != $var2) . "<br>";

        echo "not equals to operator(strict): ";
        echo var_dump($var1 !== $var2) . "<br>";

        // LOGICAL OPERATORS
        echo "LOGICAL AND OPERATOR: ";
        $k = 1;
        $l = 1;
        $m = 1;
         echo var_dump($k && $l && $m) ."<br>";
        // echo var_dump($k AND $l AND  $m) ."<br>";

        echo "LOGICAL OR OPERATOR: ";
        $o = 1;
        $p = 0;
        $q = 0;
        // echo var_dump($o || $p ||  $q) ."<br>";
        echo var_dump($o OR $p OR $q) ."<br>";

        echo "NOT OPERATOR";
        echo var_dump(!$p) ."<br>";

        echo "XOR OPERATOR: ";
        $o = 1;
        $p = 0;
        $q = 0;
        echo var_dump($o xor $q) ."<br>";

        // ARRAY OPERATORS
        echo "<strong>Union of m and n: </strong>";

        $m = array("a" => "apple", "b" => "banana");

        $n = array("c" => "orange", "d" => "strawberry");

        $result = $m + $n;
        print_r($result);





        
    
    ?>
</body>
</html>