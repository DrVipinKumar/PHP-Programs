<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
          class Student
          {
            public $name="Ravi";
            function displayName()
            {
                echo "<br>Your name=$this->name";
            }

          }
        $o1=new Student();
        $o1->name="Rajiv";
        $o1->displayName();
        $o2=new Student();
        $o2->displayName();
        
    ?>
</body>
</html>