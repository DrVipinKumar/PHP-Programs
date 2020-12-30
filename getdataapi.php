<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    $hostname="localhost";
    $username="root";
    $pwd="kiet";
    $dbname="wtmca1a";
    $query="select * from student";
    $conn=new mysqli($hostname,$username,$pwd,$dbname);
    if($conn->connect_error)
    {
        die("Connect not stablished".$conn->connect_error);
    }
    else
    {
        
        $result=$conn->query($query);
        if($result->num_rows>0)
        {
            echo json_encode($result->fetch_all(MYSQLI_ASSOC));            
        }
        else{
            echo json_encode(array('Message'=>'No Record Found','Status'=>false));
        }
       
    }
    $conn->close();
?>