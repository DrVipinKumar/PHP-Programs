<?php
    $studentsinfo=file_get_contents("http://localhost:8080/wtcode/getdataapi.php",true);
    $studentdata=json_decode($studentsinfo,true);
    
    foreach($studentdata as $key =>$value)
    {
        if (is_array($value))
        {
            foreach ($value as $skey =>$svalue)
            {
                echo "<br>".$skey."=>".$svalue;
            }
        }
    }
?>