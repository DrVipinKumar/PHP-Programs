<?php
if(!empty($_REQUEST["roll_no"]))
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
    $query="delete from student where roll_no=$roll_no";
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
    echo "<h2 style='color:red;'>Error: Enter roll no to delete record</h2>";
}
?>