<?php include('header.php');  ?>

<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['user'];
$order = $_SESSION['order'] ?? null;
?>

<h2>Order Summary</h2>
<p>User: <?php echo htmlspecialchars($user['display_name']); ?> (<?php echo htmlspecialchars($user['username']); ?>)</p>

<?php if (!$order): ?>

    <p>No order found. <a href="home.php">Go pick a toy</a></p>

<?php else: ?>

    <ul>
      <li>Toy: <?php echo htmlspecialchars($order['toy_name']); ?></li>
      <li>Description: <?php echo htmlspecialchars($order['toy_desc']); ?></li>
      <li>Unit Price: $<?php echo number_format($order['unit_price'], 2); ?></li>
      <li>Quantity: <?php echo htmlspecialchars($order['quantity']); ?></li>
      <li><strong>Total Amount to Pay: $<?php echo number_format($order['total'], 2); ?></strong></li>
      <li>Ordered at: <?php echo htmlspecialchars($order['ordered_at']); ?></li>
    </ul>
    <p></p>

    <form action="logout.php" method="post" style="display:inline;">
        <button type="submit">Logout and End Session</button>
      </form>

<?php endif; ?>   <!-- ✅ THIS WAS MISSING -->

<?php include('footer.php'); ?>
