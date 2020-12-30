<?php
session_start();//it should be first line of your page
echo "<br>Your session id is=".session_id();
if(isset($_SESSION['item']))
{
echo "<br>Your mobile modle =".$_SESSION['item']."and price =".$_SESSION['price']."is purchased";

}
else
{
    echo "Please goto first";
    include("sessionpage1.php");

}
?>