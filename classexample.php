<?php
   class Rectangle{
         public $length;
         public $breath;
         function __construct($l,$b)
         {
            $this->length=$l;
            $this->breath=$b;
         }
         function getArea()
         {

             return "<br>Area of rectangle is=".($this->length * $this->breath);
         }

     }
     $r1 = new Rectangle(34,56);
     echo $r1->getArea();
     $r2 = new Rectangle(56,56);
     echo $r2->getArea();
?>