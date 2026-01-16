<?php
$precipitation=array
("Monday"=>5,
"Tuesday"=>8,
"Wednesday"=>7,
"Thursday"=>4,
"Friday"=>3,
"Saturday"=>5,
"Sunday"=>7);
echo "<ul>";
$x=0;
foreach($precipitation as $b=>$p){
    $x+=$p;
    echo "<li>", $b, " = ", $p, "</li>";
}
echo "The total amount of the precipitation is ", $x," litres per square meter";
?>