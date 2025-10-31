<?php
// Función para cambiar el formato del nombre ("Apellido, Nombre" → "Nombre Apellido")
function cambiarNombre($nombre) { // "Apellido, Nombre"
    $partes = explode(', ', $nombre);
    return $partes[1] . ' ' . $partes[0]; // "Nombre Apellido"
}

// Array de estudiantes sin índices
$estudiantes = array(
    array("Fernández Gil, María", 8, 7, 9),
    array("López Ruiz, Antonio", 6, 8, 7),
    array("García Pérez, Laura", 9, 9, 10),
    array("Martínez Díaz, Jorge", 5, 6, 7),
    array("Sánchez León, Carmen", 7, 8, 8),
    array("Ramírez Torres, Pablo", 6, 5, 6),
    array("Hernández Mora, Lucía", 9, 8, 9),
    array("Morales Peña, Javier", 7, 7, 8),
    array("Castro Vidal, Ana", 10, 9, 10),
    array("Ruiz López, Diego", 5, 6, 6),
    array("Pérez Gómez, Marta", 8, 8, 7),
    array("Torres Álvarez, Sergio", 6, 7, 6),
    array("Vargas Ortega, Elena", 9, 9, 8),
    array("Romero Cruz, David", 7, 8, 7),
    array("Ortega Soto, Irene", 8, 7, 9),
    array("Navarro Vega, Luis", 6, 6, 7),
    array("Jiménez Flores, Paula", 9, 9, 10),
    array("Cano Ramos, Andrés", 5, 5, 6),
    array("Gómez Marín, Sara", 8, 9, 9),
    array("Domínguez Lara, Carlos", 7, 8, 8)
);

// Mostrar tabla
echo "<table>";
echo "<tr><th>Nombre</th><th>Proyecto</th><th>Actividad</th><th>Examen</th><th>Nota Final</th></tr>";

foreach ($estudiantes as $e) {
    $nombre = cambiarNombre($e[0]);
    $nota_final = $e[1] * 0.35 + $e[2] * 0.15 + $e[3] * 0.50;

    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>$e[1]</td>";
    echo "<td>$e[2]</td>";
    echo "<td>$e[3]</td>";
    echo "<td>" , number_format($nota_final, 2) , "</td>";
    echo "</tr>";
}

echo "</table>";
?>
