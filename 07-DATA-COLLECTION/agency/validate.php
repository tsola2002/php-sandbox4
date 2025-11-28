
<?php
// validate.php
session_start();

// simple hardcoded credentials for demo
$validUsername = 'favour';
$validPassword = 'pass123';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // redirect to the login page
    header('Location: login.php');
    exit;
}

// remove whitespace from username and password inputs
$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if ($username === $validUsername && $password === $validPassword) {
    // regenerate id for security
    session_regenerate_id(true);
    // store user details in session
    $_SESSION['user'] = [
        'username' => $username,
        // add more user details if needed
        'display_name' => ucfirst($username)
    ];

    // Initialize toy catalog (so home.php can use it); alternatively put the catalog in an include
    $_SESSION['toys'] = [
        1 => ['name' => 'Teddy Bear',    'desc' => 'Soft plush teddy bear (30cm).', 'price' => 9.99],
        2 => ['name' => 'Remote Car',    'desc' => 'Battery powered remote car with lights.', 'price' => 24.50],
        3 => ['name' => 'Building Blocks','desc' => '100-piece colourful blocks set.', 'price' => 15.00],
        4 => ['name' => 'Doll House',    'desc' => 'Miniature wooden doll house.', 'price' => 49.99],
    ];

    // redirect to home
    header('Location: home.php');
    exit;
} else {
    // redirect back with error
    $err = urlencode('Invalid username or password.');
    header("Location: login.php?error={$err}");
    
    exit;
}










