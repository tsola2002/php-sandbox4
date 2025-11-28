
<?php
// details.php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: home.php');
    exit;
}

$toy_id = isset($_POST['toy_id']) ? intval($_POST['toy_id']) : 0;
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

$toys = $_SESSION['toys'] ?? [];

if ($toy_id <= 0 || $quantity <= 0 || !isset($toys[$toy_id])) {
    $err = urlencode('Invalid selection or quantity.');
    header("Location: home.php?error={$err}");
    exit;
}

$toy = $toys[$toy_id];
$total = $toy['price'] * $quantity;

// store selection and computed amount into session
// creates an associative array
$_SESSION['order'] = [
    'toy_id' => $toy_id,
    'toy_name' => $toy['name'],
    'toy_desc' => $toy['desc'],
    'unit_price' => $toy['price'],
    'quantity' => $quantity,
    'total' => round($total, 2),
    'ordered_at' => date('Y-m-d H:i:s')
];

// redirect to message.php to display the stored info
header('Location: message.php');
exit;







