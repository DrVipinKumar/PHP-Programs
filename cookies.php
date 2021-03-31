<?php
   $name="college";
   $value="KIET";
   setcookie($name,$value,time()+1);
   if(isset($_COOKIE[$name]))
   {
       echo "<br>Cookie Name=".$name;
       echo "<br>Cookie Value=".$_COOKIE[$name];
   }
   else
   {
       echo "Cookie not found";
   }
?>