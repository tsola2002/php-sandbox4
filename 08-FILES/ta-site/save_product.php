
<?php include('header.php');  ?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Retrieve form input
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $price = $_POST['price'];

    // Format the product data
    $productData = "Product ID: $productId | Product Name: $productName | Price: $price" . PHP_EOL;

    // Save to file (append mode)
    file_put_contents('products.txt', $productData, FILE_APPEND);

    echo "<h3>Product saved successfully!</h3>";
    echo "<a href='index.php'>Add another product</a>";
}
?>


<?php include('footer.php'); ?>