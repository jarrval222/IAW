<?php

// Examen U" Introduction PHP

// El museo de la ciudad, tiene grabado el nombre de cada objeto de su coleccion, tambien sus materiales, 
// sus medidas en centimetros (altura y ancho), la tecnica aplicada su fecha y despcripcion

// blown =soplado
// vessels = jarrones

// Necesitamos generar un script que nos de una tabla con el el volumen y el color
// Donde su fecha es anterior a 1960

// Volumen es igual a base * altura

// Formula: Volumen = pi * r2 * altura
// el ratio es la mitad del diametro
// el diametro es la mitad de la base

// Como seria la tabla
// Volumen     
// 

$museum = array(
    array("name" => "vessels",      "materials" => "glass",     "height" => 90,     "diameter" => 30, "technique" => "blown",        "date" => 1962, "description" => "A vessels..."),
);

// Funcion calcular volumen

function obtenerVolumen($heightArray, $diameterArray){

    $ratio = 2 * ($diameterArray / 2);

    $calculoVolumen = 3.14 * $ratio * $heightArray;

    return $calculoVolumen;
}

// Tabla

echo "<table>";

echo "<tr> <th> Volumen </th> </tr>";

foreach($museum as $obra){
    $nameObra       = $obra['name'];
    $materialsObra  = $obra['materials'];
    $heightObra     = $obra['height'];
    $diameterObra   = $obra['diameter'];
    $techniqueObra  = $obra['technique'];
    $dateObra       = $obra['date'];
    $descriptionObra = $obra['description'];

    if($dateObra >= 1960){
        echo "<tr>";

        echo "<td>" . obtenerVolumen($heightObra, $diameterObra) . "</td>";

        echo "</tr>";
    }
}

echo "</table>";
?>