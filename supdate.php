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
      $name=$_REQUEST["name"];
      $semester=$_REQUEST["semester"];
      $section=$_REQUEST["section"];
      $query="update student set name='$name',semester='$semester',section='$section' where roll_no=$roll_no";
      if($conn->query($query)==true)
      {
          echo"Student information has been updated";
      }
      else
      {
          "Error".$conn->error;
      }
    }

?>