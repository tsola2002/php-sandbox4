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
        $john = 21;

        // if($john > 18){
        //     echo "John can enter the club now";
        // } else {
        //     echo "John Go Home!!";
        // }

        // IF/ELSEIF STATEMENT
        // if($john > 18){
        //     echo "Premium ticket for john";
        // } elseif($john > 10) {
        //     echo "Teen Ticket for John!!";
        // } elseif($john > 3) {
        //     echo "Toddler Ticket with goodie goodie";
        // }

        // SWITCH CASE STATEMENT
        $day = 5;

        switch ($day) {
            case 1:
                echo "The day is Sunday";
                break;
            case 2:
                echo "The day is Monday";
                break;
            case 3:
                echo "The day is Tuesday";
                break;
            case 4:
                echo "The day is Wednesday";
                break;
            case 5:
                echo "The day is Thursday";
                break;
            case 6:
                echo "The day is Friday";
                break;
            case 7:
                echo "The day is Saturday";
                break;
        }




        
    ?>
</body>
</html>