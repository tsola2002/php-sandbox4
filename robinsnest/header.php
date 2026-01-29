<?php 

session_start();

require_once 'functions.php';

$userstr = 'Welcome Guest';
$randstr = substr(md5(rand()), 0, 7);

if (isset($_SESSION['user'])) {

    $user  = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";

}
  
else $loggedin = FALSE;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery.js"></script>
    <title>Robins Nest <?= $userstr ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a href="index.php" class="navbar-brand">Robin's Nest</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <?php if ($loggedin): ?>
                <li class="nav-item"><a class="nav-link" href="members.php?view=<?= $user ?>&r=<?= $randstr ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="members.php?r=<?= $randstr ?>">Members</a></li>
                <li class="nav-item"><a class="nav-link" href="friends.php?r=<?= $randstr ?>">Friends</a></li>
                <li class="nav-item"><a class="nav-link" href="messages.php?r=<?= $randstr ?>">Messages</a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php?r=<?= $randstr ?>">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php?r=<?= $randstr ?>">Logout</a></li>
                    <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="index.php?r=<?= $randstr ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="signup.php?r=<?= $randstr ?>">Sign Up</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php?r=<?= $randstr ?>">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
<?php if (!$loggedin) echo "<p class='text-muted'>You must be logged in to use this app</p>"; ?>
   