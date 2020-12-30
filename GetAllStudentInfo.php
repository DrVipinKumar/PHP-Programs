<?php
   $hostname="localhost";
   $username="root";
   $pwd="kiet";
   $dbname="wtmca1a";
   $data=file_get_contents("php://input",true);
   $dataarray=json_decode($data,true);
   $sid=$dataarray["id"];
   $query="select * from student where sid=$sid";
    $conn=new mysqli($hostname,$username,$pwd,$dbname);
    if($conn->connect_error)
    {
        echo "No Connection".$conn->connect_error;
    }
    else
    {
       $result=$conn->query($query);
       if($result->num_rows>0)
       {
           echo json_encode($result->fetch_all(MYSQLI_ASSOC),true);
       }
       else
       {
           echo json_encode(array("Message"=>"No Record Found","Status"=>false));
       }
    }
?>