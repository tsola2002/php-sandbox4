<?php include('header.php');  ?>





    <h2>Upload Your Photo</h2>

    <form enctype="multipart/form-data" action="file_upload.php" method="post" style="display:block">
        <label>File Name:</label><br>
        <input type="text" name="name" required style="border:2px solid black"><br><br>

        <label>Upload A Photo:</label><br>
        <input type="file" name="photo" required style="border:2px solid black"><br><br>

        <button type="submit" name="submit">Save Product</button>
    </form>






 <?php include('footer.php'); ?>