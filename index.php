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
           $_SESSION["name"]="Dr. Vipin Kumar";
           $name="Dr. Vipin Kumar";
           var_dump($name);
           echo "<br>";
           $roll_no=1;
           var_dump($roll_no);
           echo "<br>This is  my name $name",", Roll number=$roll_no";
           print "<br>This is my name $name".", Roll Number=$roll_no";
           define("KIET","www.kiet.edu");
           echo "<br>".KIET;

    ?>
    <a href="Arrays.php">Open Arrays.php</a>
    </body>
</html>