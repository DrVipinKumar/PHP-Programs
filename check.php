<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $username=$_REQUEST["username"];
        $pwd = $_REQUEST["pwd"];
        if ($username=="KIET" && $pwd=="MCA")
        {
             header("Location:functions.php");
             $_SESSION["validuser"]="true";
        }
        else
        {
            echo "<span style='color:red'>Invalid Username or Password, Try Again!</span>";
            include 'login.php';
            $_SESSION["validuser"]="false";
        }
    ?>
</body>
</html>