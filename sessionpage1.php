<?php
session_start();//it should be first line of your page
echo "<br>Your session id is=".session_id();
$selectitem="RealmePhone 7 Pro";
$selectprice="16000";
$_SESSION["item"]=$selectitem;
$_SESSION['price']=$selectprice;
?>
<br>
<a href="sessionpage2.php">Purchased</a>