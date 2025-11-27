<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Working With Cookies</h1>

    <?php 
        // CREATING A COOKIE IN PHP
        setcookie("username","omatsola", time() + 60);
        setcookie("id","007", time() + 60);
    ?>
</body>
</html>