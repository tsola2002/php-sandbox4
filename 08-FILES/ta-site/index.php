<?php include('header.php');  ?>





    <h2>Enter Product Details</h2>

    <form action="save_product.php" method="post" style="display:block">
        <label>Product ID:</label><br>
        <input type="text" name="product_id" required style="border:2px solid black"><br><br>

        <label>Product Name:</label><br>
        <input type="text" name="product_name" required style="border:2px solid black"><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" required style="border:2px solid black"><br><br>

        <button type="submit">Save Product</button>
    </form>






 <?php include('footer.php'); ?>