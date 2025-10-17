<?php
$a=2; //x²
$b=8; //x
$c=1; //constant
$result1= -($b)+sqrt(($b**2)-(4*$a*$c));
$result2= -($b)-sqrt(($b**2)-(4*$a*$c));
$discriminant= ($b**2)-(4*$a*$c);
if ($discriminant<0){
    echo "The equation has no real solutions.";
}  else {
    echo"The two solutions are: ",$result1 , " and ", $result2;
}
?>