<?php
require_once 'functions.php';

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $stmt = querysql("SELECT * FROM members WHERE user = ?", [$user]);
    if ($stmt->rowCount()) {
        echo "<span class='text-danger'>&#x2718; The username '$user' is taken</span>";
    } else {
        echo "<span class='text-success'>&#x2714; The username '$user' is available</span>";
    }
}

?>