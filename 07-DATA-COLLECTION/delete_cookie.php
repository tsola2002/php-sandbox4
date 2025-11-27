<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Deleting cookies
    </h1>

    <?php 
        setcookie("username","", time() - 70);
        setcookie("id","", time() - 70);
    ?>
</body>
</html>