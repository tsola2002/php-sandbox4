<?php 

    $host = 'localhost';
    $database =  'robinsnest';
    $username = 'root';
    $password = '';
    $chrs = 'utf8mb4';
    $attr = "mysql:host=$host;dbname=$database;charset=$chrs";
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

        function sanitizeString($var){
            global $pdo;
            $var = strip_tags($var);
            $var = htmlentities($var);
            $var = stripslashes($var);
            $result = $pdo->quote($var);
            return str_replace("'", "", $result);
        }

        function destroySession() {
            $_SESSION = [];
            if (session_id() != "" || isset($_COOKIE[session_name()]))
                setcookie(session_name(), '', time() - 2592000, '/');
            session_destroy();
        }

        
function showProfile($user)
{
    $img = "$user.jpg";

    if (file_exists($img)) {
        $ts = $_SESSION['profile_img_ts'] ?? filemtime($img);
        echo "<img 
                id='profile-preview'
                src='$img?ts=$ts'
                class='img-thumbnail mb-3'
                width='100'>";
    } else {
        echo "<img 
                id='profile-preview'
                src='default.png'
                class='img-thumbnail mb-3'
                width='100'>";
    }

    $result = querySql(
        "SELECT text FROM profiles WHERE user = ?",
        [$user]
    );

    if ($result->rowCount()) {
        $row = $result->fetch();
        echo "<p>" . nl2br(htmlspecialchars($row['text'])) . "</p>";
    }
}



?>      