<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Working With Forms in PHP</h1>

    <form action="handle_reg.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="username" name="username" placeholder="input your name" >
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"  placeholder="input your email" >
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="input your password" >
        <br><br>

        <label for="dob">Date Of Birth:</label>
        <input type="date" id="dob" name="dob" placeholder="input your date of birth">
        <br><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>