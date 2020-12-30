<?php
     class AC 
     {
         public $model;
         public $name;
         public $date;

         function __construct($name,$model,$date)
         {
               $this->name=$name;
               $this->model=$model;
               $this->date=$date;
         }
         function displayACInfo()
         {
              echo "<br>Name=$this->name";
              echo "<br>Model=$this->model";
              echo "<br>Data of purchase=$this->date";
         }
     }
    $ac1=new AC("LG","V03","10/10/2020");
    $ac1->displayACInfo();
    class SmartAC extends AC 
     {
            function __construct($name,$model,$date)
            {
                 parent::__construct($name,$model,$date);
            }
            public $wifi="yes";
            public $cloud_storage="yes";
            public $music="no";
            function displaySmartACInfo()
            {
              $this->displayACInfo();
              echo "<br>Wifi=$this->wifi";
              echo "<br>Cloud Storage=$this->cloud_storage";
              echo "<br>music=$this->music";
            }

     }
     $sac1=new SmartAC("Valtas","VOL03","20/10/2020");
     $sac1->displaySmartACInfo();

?>