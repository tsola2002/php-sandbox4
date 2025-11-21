<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <h1>Working With Array Functions</h1>
    <?php 
        $names = ["Favour", "Jude", "Nina", "Sophia"];

        array_push($names, "Marcel", "Michael"); // adding elements to the end

        print_r($names);
        echo "<br>";


        $a = [1,2,3];
        $b = [4,5,6];
        $merged = array_merge($a, $b); // merging two arrays

        print_r($merged);
    ?>
</body>
</html>