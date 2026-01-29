<?php 
    require_once 'header.php';
?>

<div class="text-center">
    <h1>Welcome to Robin's Nest</h1>
    <?php if ($loggedin): ?>
        <p>Hello <?= htmlspecialchars($user) ?>, you are logged in!</p>
    <?php else: ?>
        <p>Please <a href="signup.php">sign up</a>  or <a href="login.php">log in</a>  to continue.</p>
    <?php endif; ?>
</div>
<footer class="text-center mt-5">
    <p>Web App from <i><a href="https://github.com/tsola2002"></a></i></p>
</footer>
</div>
</body>
</html>