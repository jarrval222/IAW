<?php
$num1=3;
$num2=5;
$num3=2;
if ($num1 >  $num2 &&  $num1 > $num3 && $num2 > $num3){ 
    echo "The order is : ", $num1, ", ", $num2, ", ", $num3;
} elseif ($num1 >  $num2 &&  $num1 > $num3 && $num3 > $num2) {
    echo "The order is : ", $num1, ", ", $num3, ", ", $num2;
} elseif ($num2 >  $num1 &&  $num2 > $num3 && $num1 > $num3) {
    echo "The order is : ", $num2, ", ", $num1, ", ", $num3;
} elseif ($num2 >  $num1 &&  $num2 > $num3 && $num3 > $num1) {
    echo "The order is : ", $num2, ", ", $num3, ", ", $num1;
} elseif ($num3 >  $num1 &&  $num3 > $num2 && $num1 > $num2) {
    echo "The order is : ", $num3, ", ", $num1, ", ", $num2;
} else {
    echo "The order is : ", $num3, ", ", $num2, ", ", $num1;
}
?>