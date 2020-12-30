<?php
   session_start();
   if(isset($_SESSION["checked"]) && $_SESSION["checked"]==true)
   {
     $name=$_SESSION["name"];
     echo "Welcome $name";
     function getsum($num1,$num2=12)
   {
      return ($num1+$num2);
   }

   $result=getsum(23,45);
   echo "<br>The sum of two numeber is =$result";
   echo "<br>Sum of two number is=",getsum(67);
   function selfMultyply(&$num1)
   {
       $num1=$num1*$num1;
       echo $num1;
   }
   $mynum=2;
   echo "<br>Before=",$mynum;
   echo "<br>Return value=",selfMultyply($mynum);
   echo "<br>After=",$mynum;
   echo "<br><a href='statements.php'>Open Satements</a>";
  }
  else
  {
     echo "You are not valid user";
     include("login.php");
  }
   
?>