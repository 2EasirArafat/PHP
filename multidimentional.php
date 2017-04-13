<?php

$students=array('R'=>array('1','10.1','MCA'),

                'M'=>array('5','20.1','MBA')
);

print_r($students);
echo $students['R'][2];

echo "<h3> Another way to print </h3><br>";

$Results=array("MUNNA"=>array("Roll"=>'20',"Mark"=>'95',"DPT"=>C.S.E),
              "Shobuj"=>array("Roll"=>'21',"Mark"=>'98',"DPT"=>CIVIL)
              
              );

              print_r($Results);
              echo $Results ["MUNNA"]["Roll"];

?>