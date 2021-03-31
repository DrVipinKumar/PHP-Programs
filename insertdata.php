<html>
<head>
<title>
Insert Data 
</title>
</head>
<body>
<h1>Insert Student Information</h1>
<form action="insertdata.php" method="post">
<input type="text" name="sid" placeholder="Enter student id"><br><br>
<input type="text" name="sname" placeholder="Enter your name"><br><br>
<input type="text" name="section" placeholder="Enter your section"><br><br>
<input type="text" name="semester" placeholder="Enter your semester"><br><br>
<input type="text" name="college" placeholder="Enter your college"><br><br>
<input type="submit" name="Insert">
<input type="reset" name="Clear"><br><br>
</form>
</body>
</html>
<?php
 if(isset($_REQUEST["Insert"]))
 {
   $hostname="localhost";
   $username="root";
   $pwd="kiet";
   $dbname="wtmca1a";
   $sid=(int)$_REQUEST["sid"];
   $sname=$_REQUEST["sname"];
   $section=$_REQUEST["section"];
   $semester=$_REQUEST["semester"];
   $college=$_REQUEST["college"];
   #$iqueryd="insert into student values($sid,"+"$sname"+","+"$section"+","+"$semester"+","+"$college"+")";
   #$iquerys='insert into student values($sid,"$sname","$section","$semester","$college")';
   $iquery="insert into student values($sid,'$sname','$section','$semester','$college')";
   $conn=new mysqli($hostname,$username,$pwd,$dbname);
   if($conn->connect_error)
   {
       die("Error in connection".$conn->connect_error);
   }
   else{
    if($conn->query($iquery))
    {
        echo "Record Inserted";
    }
    else
    {
        echo "Error".$conn->error;
    }
   }
 }
 include("displaydata.php");
?>