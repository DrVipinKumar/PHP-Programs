<?php
    $host="localhost";
    $username="root";
    $pwd="kiet";
    $dbname="wtdb";
    $query="select * from student";
    $conn=new mysqli($host,$username,$pwd,$dbname);
    if($conn->connect_error)
    {
        echo "Not able to connect with database".$conn->connect_error;
    }
    $result=$conn->query($query);
    if($result->num_rows>0)
    {
        ?>
<table border=1>
     <tr>
     <th>Roll_no</th>
     <th>Student Name</th>
     <th>Semester</th>
     <th>Section</th>
     </tr>
        <?php
        while($row=$result->fetch_assoc())
        {
?>
          <tr>
     <td><?php echo $row["roll_no"]; ?>  </td>
     <td><?php echo $row["name"]; ?>  </td>
     <td><?php echo $row["semester"]; ?>  </td>
     <td><?php echo $row["section"]; ?>  </td>
      </tr>
<?php
        }
        ?>
 </table>
        <?php

    }
    $conn->close();
?>