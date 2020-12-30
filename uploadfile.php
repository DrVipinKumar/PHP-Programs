<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
        if(isset($_REQUEST["submit"]))
        {
            $target="data/";
            $filename=$target.$_FILES["file"]["name"];
            print_r($_FILES);
            if(move_uploaded_file($_FILES["file"]["tmp_name"],$filename))
            {
                echo "Uploaded successfuly";
            }
            else
            {
                echo "Not uploaded";
            }
        }
 ?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>