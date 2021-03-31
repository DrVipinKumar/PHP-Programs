<?php
    if(!empty($_REQUEST["roll_no"])&& !empty($_REQUEST["sname"])&&!empty($_REQUEST["semester"])&&!empty($_REQUEST["section"]))
    {
    $host="localhost";
    $username="root";
    $pwd="kiet";
    $dbname="wtdb";
    $conn=new mysqli($host,$username,$pwd,$dbname);
    if($conn->connect_error)
    {
        echo "Not able to connect with database".$conn->connect_error;
    }
    $roll_no=$_REQUEST["roll_no"];
    $sname=$_REQUEST["sname"];
    $semester=$_REQUEST['semester'];
    $section=$_REQUEST['section'];
    $query="insert into student values($roll_no,'$sname','$semester','$section')";
    if($conn->query($query)==true)
    {
        header("location:curd.php");
    }
    else
    {
        echo "Error".$conn->error;
    }
    $conn->close();
}
else
{
    echo "<h2 style='color:red;'>Error: Enter complete information</h2>";
}
?>