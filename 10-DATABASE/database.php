<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php and mysql</title>
</head>
<body>
    <h1>Integrating php with mysql</h1>
    <?php 

    // 1. & 2Create a Connection to the Database and select the database
    $hostname = "localhost";
    $username  = "root";
    $password = "";
    $port = 3306;
    $dbname = "school_db";

    $connection = mysqli_connect($hostname, $username, $password, $dbname, $port);

    if(!$connection){
        die('Could not connect to the datbase' . mysqli_connect_error());
    } else {
        echo "Succesfully connected to the database";
    }

    // 3. Perform a query against the mysql database
    $query = "SELECT * FROM tbl_student";

    // this will run the above query against our database
    $result = $connection->query($query);


    // 4. using and displaying the returned data
    echo "<table border=1>";
    echo "<tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>CREATED AT</th></tr>";

    // Looping throught the result array
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        echo "<tr><td>" . $row['id'] . "</td><td>"
        . $row['name'] . "</td><td>"
        . $row['email'] . "</td><td>"
        . $row['created_at'] . "<td></tr>";
    }
    echo "</table>";

    ?>
</body>
</html>