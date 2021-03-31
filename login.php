<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       session_start();
    ?>
    <center>
        <br><br>
    <h1>Login Here</h1><br>
    <form action="check.php" method="POST">
      <input type="text" name="username" placeholder="Enter username"><br><br>
      <input type="password" name="pwd" placeholder="Enter password"><br>
      <br>
      <input type="submit" name="submit">

    </form>
</center>
</body>
</html>