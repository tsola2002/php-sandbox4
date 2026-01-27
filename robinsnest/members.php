<?php
require_once 'header.php';

$stmt = querySql("SELECT user FROM members");
echo "<h3>All Members</h3><ul class='list-group'>";
while ($row = $stmt->fetch()) {
    echo "<li class='list-group-item'><a href='members.php?view={$row['user']}&r=$randstr'>{$row['user']}</a></li>";
}
echo "</ul>";
?>