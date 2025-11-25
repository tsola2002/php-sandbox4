<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handle Reg</title>
</head>
<body>
    <h1>Handle Registration Page</h1>

    <?php 
        if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["dob"])){

            echo "Your Form Details are the following "
            . $_POST["username"] . " "
            . $_POST["email"] . " "
            . $_POST["password"] . " "
            . $_POST["dob"];
        }
    ?>
</body>
</html>