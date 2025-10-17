<?php
$num1=3;
$num2=5;
$num3=2;
if ($num1 > $num2 && $num1 > $num3 && $num2 > $num3)
    echo "The biggest number is: ", $num1, " and the smallest is: ", $num3;
elseif ($num1 > $num2 && $num1 > $num3 && $num3 > $num2)
    echo "The biggest number is: ", $num1, " and the smallest is: ", $num2;
elseif ($num2 > $num1 && $num2 > $num3 && $num1 > $num3)
    echo "The biggest number is: ", $num2, " and the smallest is: ", $num3;
elseif ($num2 > $num1 && $num2 > $num3 && $num3 > $num1)
    echo "The biggest number is: ", $num2, " and the smallest is: ", $num1;
elseif ($num3 > $num1 && $num3 > $num2 && $num1 > $num2)
    echo "The biggest number is: ", $num3, " and the smallest is: ", $num2;
else
    echo "The biggest number is: ", $num3, " and the smallest is: ", $num1;
?>