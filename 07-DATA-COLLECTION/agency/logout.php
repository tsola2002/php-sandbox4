<?php include('header.php');  ?>

<?php
// logout.php
session_start();
// unset all session variables
$_SESSION = [];

// delete session cookie if exists
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// destroy the session
session_destroy();

// show a brief message and link to login
?>


 <h2>You have been logged out.</h2>
  <p><a href="login.php">Login again</a></p>



<?php include('footer.php'); ?>