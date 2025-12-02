<?php include('header.php');  ?>


<?php 
    if(isset($_POST['submit'])){
        // create a target directory

        //print_r($_FILES);

        $targetDir = "uploads/";
        $fileName = basename($_FILES["photo"]["filename"]);

        $targetFile = $targetDir . $fileName;


        // uploade the file
        if(move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)){
            echo "<h3>File Uploaded Successfully</h3>";
            echo "<img src='$targetFile' alt='uploaded photo' style='width: 300px;' />";
        } else{
            echo "<h3>There was an error uploading the file</h3>";
        }
    }
   
   
   
?>








 <?php include('footer.php'); ?>