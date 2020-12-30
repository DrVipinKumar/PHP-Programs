<?php

class MyName
{
    private $name="KIET";
    private $age=10;
    public function getYourName()
    {
        return $this->name;
    }
   public function getYourAge()
    {
        return $this->age;
    }
   public function setYourAge($age)
    {
        $this->age=$age;
    }
}
$my1=new MyName();
echo "<br>Name =".$my1->getYourName();
echo "<br>Age=".$my1->getYourAge();
$my1->setYourAge(50);
echo "<br>Name =".$my1->getYourName();
echo "<br>Age=".$my1->getYourAge();

?>