<?php
$palabra =array("madam");
$contar=strlen($palabra[0]);
$inicializar=0;
while ($palabra[0] == $palabra[0][$contar-1]){
    $inicializar++;
    $contar--;
    if ($contar==0){
        echo "Es palíndromo";
        break;
    }
}

if ($palabra[0] != $palabra[0][$contar-1]){
    echo "No es palíndromo";
}   
?>
/* Con la función strrev() */
<?php
$word = "madam";
if ($word == strrev($word)) {
    echo "Es palíndromo";
} else {
    echo "No es palíndromo";
}
?>