<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["amazon"]))
    {
        $num1=100;
        $num2=100;
        echo "Sum of two number=",$num1+$num2;
        ?>
        <br>
        <?php
        print "Sum of two number=".($num1+$num2);
    }
    else
    {
        echo "Got to main page";
    }
     

?>
</body>
</html>