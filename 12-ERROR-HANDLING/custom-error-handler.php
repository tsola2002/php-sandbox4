<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Error Handler</title>
</head>
<body>
    <h1>Working With Custom Error Handler</h1>
    <?php 
        function myErrorHandler($errNo, $errMessage, $errFile, $errLine){
            echo "<strong>Error:</strong> [$errNo] $errMessage - Error on this particular line $errLine in file $errFile<br>";

            if($errNo == E_USER_ERROR){
                exit("Fatal error occured. Exiting script");
            }
        }

        set_error_handler("myErrorHandler");

        //echo $undefinedVariable; // Notice

        // trigger_error("A custom warning!! for you", E_USER_WARNING);

        trigger_error("A custom fatal error!", E_USER_ERROR);
    ?>
</body>
</html>