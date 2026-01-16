<?php
$sales = array( 120, 200, 150, 180, 90, 220, 300, 175, 260, 110, 95, 205, 180, 250, 130);
$total = 0;
foreach ($sales as $sale) {
    $total += $sale;
}
echo "El total de ventas de la quincena es: " , $total , " euros.";
?>
