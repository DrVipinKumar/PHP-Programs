<?php
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
    ?>
            <table border="1">
               <tr><th>ID</th><th>Name</th><th>Section</th><th>Semester</th><th>College</th</tr>
    <?php
            while($rows=$result->fetch_assoc())
            {
    ?>
            <tr><td><?php echo $rows["sid"]?></td><td><?php echo $rows["sname"]?></td>
            <td><?php echo $rows["section"]?></td><td><?php echo $rows["semester"]?></td>
            <td><?php echo $rows["college"]?></td></tr>
    
                
    <?php
            }
    ?>
       </table>
    <?php
        }
        else
        {
            echo "No record found";
        }
    }

    $conn->close();
?>