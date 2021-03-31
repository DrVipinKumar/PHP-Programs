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
    if(isset($_SESSION["validuser"]))
    {
    if ($_SESSION["validuser"]=="true")
    {
             function sum($num1,$num2=20)
             {
                
                 $add=$num1+$num2;
                echo "<br>Sum of two number=$add";

             }
             sum(34,56);
             sum(567,56);
             sum(45);
     }
        }
    else
    {
       echo "<span style='color:red'>Kindly login first!</span>";
       include 'login.php';
    }
    ?>
</body>
</html>