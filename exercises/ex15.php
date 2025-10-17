<?php
$a = 0;
$b = 1;
$contador = 0;
  
while ($contador < 20){
    echo $a;
    if ($contador < 19){
        echo ", ";
    }
    $n = $a + $b;
    $a = $b;
    $b = $n;
    $contador++; 
}