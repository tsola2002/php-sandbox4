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
        // do{
        //     echo "The count is: " . $count . "<br>";
        // }
        // while(++$count < 10);

        // echo "were done with do while loop!!";

        // FOR LOOP
        // for($i = 0; $i <= 10; $i++){
        //     echo "The value of i is: " . $i . "<br>";
        // }

        // FOR EACH LOOP
        // 
        
        // USING BREAK 
        // for($i = 0; $i <= 10; $i++){
        //     break;
        //     echo "The value of i is: " . $i . "<br>";
            
        // }

        // echo "Were free!!";


        // USING CONTINUE
        for($i = 0; $i <= 10; $i++){
            echo $i . "<br>";
            continue;
            echo "The value of i is:";           
        }

    ?>
</body>
</html>
