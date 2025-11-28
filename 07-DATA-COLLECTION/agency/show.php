<?php include('header.php');  ?>

<?php
// show.php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

// null coalescence operator
$toys = $_SESSION['toys'] ?? [];

// ternary operator
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if (!isset($toys[$id])) {
    echo "Invalid toy selected. <a href='home.php'>Go back</a>";
    exit;
}
$toy = $toys[$id];
?>

<h2><?php echo htmlspecialchars($toy['name']); ?></h2>
  <p><?php echo htmlspecialchars($toy['desc']); ?></p>
  <p>Price per unit: $<?php echo number_format($toy['price'], 2); ?></p>

  <form action="details.php" method="post">
    <input type="hidden" name="toy_id" value="<?php echo htmlspecialchars($id); ?>">
    <label>Quantity: <input type="number" name="quantity" min="1" value="1" required></label><br><br>
    <button type="submit">Add to Order</button>
  </form>
  <p><a href="home.php">Back to toys</a> | <a href="logout.php">Logout</a></p>










 <?php include('footer.php'); ?>