
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CURD App</title>
</head>
<body>
    <h1>Student Information</h1></br>
    <form method="get" action="CURD.php">
    <input type="text" name="roll_no" placeholder="Enter Roll No"><br>
    <input type="text" name="sname" placeholder="Enter Student Name"><br>
    <input type="text" name="semester" placeholder="Enter Semester"><br>
    <input type="text" name="section" placeholder="Enter Section"><br><br>
    <input type="submit" name="submit" value="Display">
    <input type="submit" name="submit" value="Insert">
    <input type="submit" name="submit" value="Update">
    <input type="submit" name="submit" value="Delete"><br><br>
    </form>
</body>
</html>
<?php
     
     if(isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="Display")
     {
         include("display.php");
     }
     else if(isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="Insert")
     {
         include("insert.php");
     }
     else if(isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="Update")
     {
         include("update.php");
     }
     else if(isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="Delete")
     {
         include("delete.php");
     }
     else {
        include("display.php");
     }
?>