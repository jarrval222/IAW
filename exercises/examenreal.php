//Colegio registra nombre, apellidos, DNI y fecha de registro.//
//Tabla con profesores con primer y ultima fecha de registro asi como estas fechas.
//Para cada profesor solo saldrá un codigo que sera su Inicial del nombre, las 3 primeras letras de cada apellido y los 3 ultimos digitos del DNI//
<?php
// Array con los datos de los profesores
$colegio = array(
    array("name" => "Antonio", "apellidos" => "García López", "DNI" => "12345678A", "fecha_registro" => "2022-01-15"),
    array("name" => "Jesús", "apellidos" => "Sierra Ibañez", "DNI" => "87654321B", "fecha_registro" => "2021-09-10"),
    array("name" => "Paco", "apellidos" => "Cuesta Pérez", "DNI" => "11223344C", "fecha_registro" => "2023-03-22"),
    array("name" => "Ismael", "apellidos" => "Ruiz García" , "DNI" => "34587629Q", "fecha_registro" => "2024-05-12"),
);
// Función para generar el código del profesor
    
function generarcodigo($name, $apellidos, $DNI){
    $inicial = substr($name, 0, 1);
    $apellidos = explode(" ", $apellidos);
    $codigoapellidos = "";
    foreach($apellidos as $ap){
        $codigoapellidos .= substr($ap, 0 ,4);
    }
    foreach($DNI as $ddni){
        $codigodni = substr($ddni, -3);
    }
    return $inicial . $codigoapellidos . $codigodni;
}
// Encontrar la fecha mínima y máxima de registro

$fechaminima = $colegio[0]["fecha_registro"];
$fechamaxima = $colegio[0]["fecha_registro"];
foreach ($colegio as $profesor){
    if ($profesor["fecha_registro"]<
    $fechaminima){
        $fechaminima = $profesor["fecha_registro"];
    }
    elseif ($profesor["fecha_registro"]> 
    $fechamaxima){
        $fechamaxima = $profesor["fecha_registro"];
    }
}
// Generar el código para cada profesor y crear la tabla final

        $codigo = generarcodigo( $profesor["name"],
        $profesor["apellidos"],
        $profesor["DNI"]);
// Crear el array final con los códigos y las fechas de registro

    $profesoresfechalimite = array(
    array(
        "codigo" => $codigo,
        "fecha_registro" => $profesor["fecharegistro"]
    )
    );

echo "<table>";
echo "<tr><th>codigo</th><th>Fecha de registro</th></tr>";
// Mostrar los datos en la tabla

foreach ($profesoresfechalimite as $profesor){
    echo "<tr>";
    echo "<tr><td>" , $codigo , "</td></tr>";
    echo "<tr><td>Fecha máxima de registro: " . $fechamaxima . "</td></tr>";
    echo "<tr><td>Fecha minima de registro: " . $fechaminima . "</td></tr>";
    echo "</tr>";
}
echo "</table>";
?>