<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First PHP Page</title>
</head>
<body>
<?php
     session_start();
?>
  <h1>This is my first PHP Page</h1>
  <h2>This is heading by PHP</h2>
  <script>
      document.write("Hello by JS!");
  </script>
  <?php
      echo session_name().session_id();
  ?>
</body>
</html>