<?php
$students=array("MUNNA","MOKREMA","LABONY","ARAFAT");

echo "<h3>The index value for array </h3><br/>";

print_r($students);

echo "<h3> The content value in array </h3><br/>";

for($a=0;$a<=3;$a++)
{
    echo "The NAME IS ".$students[$a]."<br/>";
}


?>