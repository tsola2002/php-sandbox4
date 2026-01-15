<?php 

    // 1. & 2Create a Connection to the Database and select the database
    /* ==========================
    DATABASE CONNECTION
    ========================== */

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname   = "school_db";
    $port     = 3306;

    $connection = mysqli_connect($hostname, $username, $password, $dbname, $port);

    if(!$connection){
        die('Could not connect to the datbase' . mysqli_connect_error());
    } else {
        echo "Succesfully connected to the database";
    }
