<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
</head>
<body>
    <h1>Working With Scopes</h1>

    <?php 

        // USING LOCAL SCOPE
        // function testLocal(){
        //     $a = 10; // local scoped variable
        //     echo $a;
        // }

        // // testLocal(); // works fine

        // echo $a; // error: undefined variable

        // USING GLOBAL SCOPE

        $y = 20; // global scoped variable
        function testGlobal() {
           global $y; // accessing global variable inside function
            echo $y;
        }

        testGlobal();

    
    ?>
</body>
</html>