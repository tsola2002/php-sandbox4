<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
    <h1>Working With Files</h1>

    <?php 

       // 1. this code creates a new file document
    //    if(touch("index.php")) {
    //         echo "A file was created";
    //    } else {
    //         echo "There was an error creating the file";
    //    }

       // 2. Delete a file
    //    if(unlink("intro.php")){
    //         echo "Success: A file has been deleted";
    //    } else {
    //         echo "Failure: File has not been deleted";
    //    }

       // 3. Opening and Writing to a file
       $resource = fopen("index.php", "w+");
       $data = "We just added content to our file \n";
       fwrite($resource, $data);
       fclose($resource);

       // 4. Reading information from a file
       $resource3 = fopen("index.php", "r");
       $content = fread($resource3,filesize("index.php"));
       fclose($resource3);

       echo $content;
    
    ?>
</body>
</html>