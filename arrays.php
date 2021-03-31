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
    echo "Sesssion variable=".$_SESSION["name"];
    $colors=array("Red","Green","Blue");  //Indexed Array
    print_r($colors);
    echo "<br>".$colors[0];
    $age=array("Ram"=>24, "Shyam"=>45,"Ravi"=>45);
    echo "<br>";
    print_r($age);
    echo "<br>";
    echo $age["Shyam"];
    $data =array(
        array(
            23,45,"true","KIET"
        ),
        array(34,56,78,89,89)
        );
        echo "<br>";
    print_r($data);
    echo "<br>".$data[0][0],$data[1][0];
    foreach($colors as $value)
    {
        echo "<br> $value";
    }
    ?>
</body>
</html>