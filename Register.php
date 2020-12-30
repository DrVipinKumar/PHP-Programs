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
                $branch=$_REQUEST["branch"];
                $section=$_REQUEST["section"];
                if(empty($name)||empty($branch)||empty($section))
                {
                    echo "Please register first!";
                }
                else
                {
                echo "Your name=$name<br>";
                echo "Your branch=$branch<br>";
                echo "Your section=$section<br>";
                }
            }
            else{
        ?>
                <h1>Register Yourself!</h1>
                <form action="Register.php" method="get">
                    <input type="text" name="name" placeholder="Enter your name"><br><br>
                    <input type="text" name="branch" placeholder="Enter your course"><br><br>
                    <input type="text" name="section" placeholder="Enter your section"><br><br>
                    <input type="submit" name="submit" value="Register"><br><br>
    <?php
            }
    ?>
    
</form>

</body>
</html>