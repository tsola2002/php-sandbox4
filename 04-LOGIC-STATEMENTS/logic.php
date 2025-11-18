<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Working With Logic Statements</h1>
    <?php 
        // CREATING IF STATEMENT
        $john = 5;

        // if($john > 18){
        //     echo "John can enter the club now";
        // } else {
        //     echo "John Go Home!!";
        // }

        // IF/ELSEIF STATEMENT
        if($john > 18){
            echo "Premium ticket for john";
        } elseif($john > 10) {
            echo "Teen Ticket for John!!";
        } elseif($john > 3){
            echo "Toddler Ticket with goodie goodie";
        }



        
    ?>
</body>
</html>