<?php
      if(isset($_REQUEST['submit']))
      {
      $hostname="localhost";
      $username="root";
      $pwd="kiet";
      $dbname="wtdb";
     
      $conn= new mysqli($hostname,$username,$pwd,$dbname);
      if($conn->connect_error)
      {
          echo "Error".$conn->connect_error;
      }
      
      $roll_no=$_REQUEST["roll_no"];
      $query="delete from student where roll_no=$roll_no";
      if($conn->query($query)==true)
      {
          echo"Student information has been deleted";
      }
      else
      {
          "Error".$conn->error;
      }
    }

?>