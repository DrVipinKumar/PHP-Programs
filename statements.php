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
         echo "Welcome ".$_SESSION["name"];
         $i=12;
         //simple statement
         echo "Value of i =$i";
         //conditional statements
         if($i==1)
         {
             echo "<br>This is true value of i=$i";
         }
         elseif($i==10)
         {
             echo "<br>This is big value of i=$i";
         }
         else
         {
            echo "<br>This is not true value of i=$i";
         }
         //conditional statements
         echo ($i>10)?"<br>This is greater than 10":"<br>This is smaller than 10";
         for($i=1;$i<11;$i++)
         {
             echo "<br>This is value of i=$i";
         }

?>
</body>
</html>