<?php
$matrices=array (
    array(1,2,3,4,5),
    array(6,7,8,9,10),
    array(11,12,13,14,15),
    array(16,17,18,19,20),
    array(21,22,23,24,25)
);
function traspuesta($matrices){
    $traspuesta = array();
    foreach ($matrices as $i){
        foreach ($i as $j => $valor){
            $traspuesta[$j][]=$valor;
        }
    }
    return $traspuesta;
}

function display_matriz($matrices){
    foreach ($matrices as $i){
        foreach ($i as $j => $valor){
            echo $matrices[$j][$j], " ";
        }
        echo "<br>";
    }
}
$traspuesta=traspuesta($matrices);
display_matriz($matrices);
display_matriz($traspuesta);
display_matriz($suma);


echo "<br> La matriz traspuesta es: <br>";
echo "<table><caption>Tabla de la matriz traspuesta</caption>";
echo "<tr><th></th><th></th><th></th><th></th><th></th><th></th></tr>";
foreach ($traspuesta as $row) {
    echo "<tr>";
    foreach ($row as $col) {
        echo "<td>", $col,"</td>";
    }
    echo "</tr>";
}
?>