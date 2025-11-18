<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Working With Loops</h1>
    <?php 

        // CREATING A WHILE LOOP
        $count = 0;
        // while($count <= 10){
        //     echo "The count is: " . $count . "<br>";
        //     $count++;
        // }
        // echo "Were Done!!";

        // DO WHILE LOOP
        do{
            echo "The count is: " . $count . "<br>";
        }
        while(++$count < 10)
    ?>
</body>
</html>
