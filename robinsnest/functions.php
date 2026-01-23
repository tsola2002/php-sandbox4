<?php 

    $host = 'localhost';
    $database =  'robinsnest';
    $username = 'root';
    $password = '';
    $chrs = 'utf8mb4';
    $attr = "mysql:host=$host;dbname=$data;charset=$charset=$chrs";
    $opts = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];


        try{
            $pdo = new PDO($attr, $username, $password, $opts);
        } catch (PDOException $e){
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
        function createTable($name, $query){
            querySql("CREATE TABLE IF NOT EXISTS $name($query)");
            echo "Table '$name' created or already exists.<br>";
        }
        function querySql($query, $params = []){
            global $pdo;
            $stmt =  $pdo->prepare($query);
            $stmt->execute($params);
            return $stmt;
        }


?>      