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
            $name=$_REQUEST["name"];
            $pwd=$_REQUEST["pwd"];
            if($name=="KIET" && $pwd=="KIET")
            {
                header("Location:functions.php?name=$name");
            }
            else
            {
                echo "<span style='color:red'>Invalid username or password!</span>";
                include("login.html");
                
            }
           }
    ?>
</body>
</html>