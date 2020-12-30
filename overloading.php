<?php
//PHP does not support Method Overloading
class Area 
{

    function __call($name,$arguments)
    {
        $noarguments=count($arguments);
        if($name=="getArea")
        {
            if($noarguments==1)
            {
                $radius=$arguments[0];
                echo "Area of Circle=".($radius*$radius*3.14);
            }
            if($noarguments==2)
            {
                $l=$arguments[0];
                $b=$arguments[1];
                echo "<br>Area of Rectangle=".($l*$b);
            }
        }
    }
    
}
$c1=new Area();
$c1->getArea(4);
$c1->getArea(10,20);
?>