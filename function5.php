<?php
declare(strict_types=1);
function triple(&$number):int{
    $number *= 3;
    return $number;
}
$num = 2.75;
triple($num);
echo $num;
?>