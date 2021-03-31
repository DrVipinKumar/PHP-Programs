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
      $query="insert into student values($roll_no,'$name','$semester','$section')";
      if($conn->query($query)==true)
      {
          echo"Student information has been inserted";
      }
      else
      {
          "Error".$conn->error;
      }
    }

?>