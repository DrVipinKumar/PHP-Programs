<?php
class A {
    function Amsg()
    {
        echo "I am in A";
    }
}

class B extends A {    //Simple Inheritance
    function Bmsg()
    {
        echo "<br>I am in B";
    }
}
class C extends B {   //Multi-Level Inheritance

    function Cmsg()
    {
        echo "<br>I am in C";
    }
}
#class D extends A,B {  //Multiple Inheritance  //Hybrid
   # function Dmsg()
  #  {
      #  echo "<br>I am in D";
   # }
#}
$a1=new A();
$a1->Amsg();
$b1=new B();
$b1->Bmsg();
$c1=new C();
$c1->Cmsg();

?>