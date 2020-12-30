<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $key="amazon";
         $value="price of product 2000/-";
         setcookie($key,$value,time()+1);
         if(isset($_COOKIE["amazon"]))
         {
             echo "Your cookie key=$key and value=$value<br>";
             header("Location:variables.php");
         }
         else
         {
             echo "Cookie not found";
         }

?>
</body>
</html>