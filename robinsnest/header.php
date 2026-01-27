<?php 

session_start();

require_once 'functions.php';

$userstr = 'Welcome Guest';
$randstr = substr(md5(rand()), 0, 7);

if (isset($_SESSION['user']))
  {
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
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a href="index.php" class="navbar-brand">Robin's Nest</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="members.php" class="nav-link">Members</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Friends</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Messages</a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Logout</a></li>

                    <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

   