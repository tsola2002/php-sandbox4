<?php
// home.php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

// storing user session in a variable
$user = $_SESSION['user'];
// storing toy session in a variable
$toys = $_SESSION['toys'] ?? [];
?>


<?php include('header.php');  ?>

 
<h2>Welcome, <?php echo htmlspecialchars($user['display_name']); ?>!</h2>
  <p><a href="logout.php">Logout</a></p>

  <h3>Available Toys</h3>
  <?php if (empty($toys)): ?>
    <p>No toys available right now.</p>
  <?php else: ?>
    <ul>
      <?php foreach ($toys as $id => $toy): ?>
        <li>
          <strong><?php echo htmlspecialchars($toy['name']); ?></strong>
          — <?php echo htmlspecialchars($toy['desc']); ?> 
          (Price: $<?php echo number_format($toy['price'], 2); ?>)
          — <a href="show.php?id=<?php echo urlencode($id); ?>">Select</a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>


    

 <?php include('footer.php'); ?>