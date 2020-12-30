<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $names=array("Ravi",true,false,"Sham","Ashok",23.45,45);//Indexed Array
    print_r($names);
    print "<br>".$names[0];
    echo "<br>",$names[0];
    foreach($names as $value)
    {
        echo "<br>",$value;
    }
    $age=array("Ravi"=>22,"Ram"=>34,"Sham"=>23,"Ashok"=>45,"kiet"=>"MCA");
    echo "<br>";
    print_r($age);
    echo "<br>",$age["Ravi"];
    echo "<br>",$age[$names[0]];
    foreach($age as $key=>$value)
    {
        echo "<br>",$key,"=>",$value;
    }
    $data=array(array(2333,444,56,6),
                array(3,4,5,6));
    echo "<br>";
    print_r($data);
    echo "<br>",$data[0][1];
    ?>
</body>
</html>