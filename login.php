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
        if(isset($_REQUEST["submit"]))
          {
           $name=$_REQUEST["name"];
           $pwd=$_REQUEST["pwd"];
           if($pwd=="KIET")
           {
               $_SESSION["checked"]=true;
               $_SESSION["name"]=$name;
               header("Location:functions.php");
           }
             else
             {
                 echo "Please enter username and password!";
                 $_SESSION["checked"]=false;
             }
          }
   ?>
    <h1>Login Here!</h1>
    <form action="login.php" method="post">
        <input type="text" name="name" placeholder="Enter your name"><br><br>
        <input type="password" name="pwd" placeholder="Enter your password"><br><br>
        <input type="submit" name="submit" value="Login"><br><br>
    </form>
</body>
</html>