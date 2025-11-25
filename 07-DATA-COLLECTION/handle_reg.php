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

    // !isset($_POST["username"]) || !isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["dob"])
        if(empty($_POST["password"])||  empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["dob"])){

            echo "<h2>Please Fill in all the required fields</h2>";
           
        }else{

            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $dob = $_POST["dob"];
                

            echo "<h2>Registration Successful</h2>";
            echo "<p> Name: $username</p>";
            echo "<p> Email: $email</p>";
            echo "<p> Date Of Birth: $dob</p>";
        }

    ?>
</body>
</html>