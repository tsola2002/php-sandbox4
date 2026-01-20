<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>try-catch</title>
</head>
<body>
    <h1>Working With Try-Catch Block</h1>
    <?php 

    function divide($a, $b){
        if( $b == 0){
            throw new Exception("Division by zero not allowed");
        }
        return $a / $b;
    }

    try {
        divide(10, 0);
    } catch (Exception $e){
        echo "Caught Exception: " . $e->getMessage();
    } finally {
        echo "This message always executes, cleaning up resources";
    }
    
    
    ?>
</body>
</html>