<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Information</h1>
    <?php
      $hostname="localhost";
      $username="root";
      $pwd="kiet";
      $dbname="wtdb";
      $query="select * from student";
      $conn= new mysqli($hostname,$username,$pwd,$dbname);
      if($conn->connect_error)
      {
          echo "Error".$conn->connect_error;
      }
      $result=$conn->query($query);
      if($result->num_rows>0)
      {
        ?>
          <table border=1>
          <tr>
          <th>Roll No</th>
          <th>Student Name</th>
          <th>Semester</th>
          <th>Section</th>
          </tr>
          <?php
              while($rows=$result->fetch_assoc())
              {
                ?>
                <tr>
          <td><?php echo $rows["roll_no"]?></td>
          <td><?php echo $rows["name"]?></td>
          <td><?php echo $rows["semester"]?></td>
          <td><?php echo $rows["section"]?></td>
          </tr>
                <?php
              }
          ?>
          </table>
   <?php
      }
      else
      {
          echo "No record found in student table";
      }

?>
</body>
</html>