<?php
$numero = 16;
for ($i=2; $i<=$numero; $i++){ //Encontrar los divisores del número
    if ($numero % $i == 0){
        $num_divisor = 0;
        $y = 2;

        while ($y<$i and $num_divisor == 0){ //Encontrar si es primo
            if($i % $y == 0){
                $num_divisor++;
            }
            $y++;
        }

        if ($num_divisor == 0){ //Si es primo, mostrarlo
            echo $i . " ";
        }
    }
}
?>