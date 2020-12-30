<?php
   class Area 
   {
      function getArea()
      {
          echo "<br>This is Area Class";
      }
   }
   class Rectangle extends Area
   {
        function getArea()
        {
            echo "<br>This is Rectangle Class";
        }
   }
   $a1=new Area();
   $a1->getArea();
   $r1=new Rectangle();
   $r1->getArea();
?>