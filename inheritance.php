<?php
    class Calculator {
        public $num1,$num2;
        function __construct($num1,$num2)
        {
            $this->num1=$num1;
            $this->num2=$num2;
        }

    }
    class Sum extends Calculator{
        function __construct($num1, $num2)
        {
           parent::__construct($num1,$num2);
        }
        function getSum()
        {
            return "<br>Sum of two number is=".($this->num1+$this->num2);
        }
    }
    $s1 = new Sum(45,56);
    echo $s1->getSum();
    $s2 = new Sum(4122,56);
    echo $s2->getSum();
?>