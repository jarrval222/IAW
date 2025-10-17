<?php
$numero = 9;
$esPrimo = true;

if ($numero < 2) {
    $esPrimo = false;
} else {
    $limit = sqrt($numero);
    for ($i = 2; $i <= $limit and $esPrimo; $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
        }

}
}
if ($esPrimo == true) {
    echo $numero . " es un número primo.";
} else {
    echo $numero . " no es un número primo.";
}
?>