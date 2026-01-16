<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <?php
        $marks = array(
            array("name" => "García Lopez, Antonio","project" => 4, "activity" => 8, "exam" => 9),
            array("name" => "Sierra Lopez, Jesús","project" => 8, "activity" => 5, "exam" => 3),
            array("name" => "Cuesta Pérez, Paco","project" => 6, "activity" => 7, "exam" => 9),
        );
function ordenar($name){
    $nuevonombre= explode(" ,", $name);
    return $nuevonombre[1] . " " . $nuevonombre[0]
}
echo "<table>
        <tr>
            <th>Name</th>
            <th>Notas</th>
        </tr>
        </table>";

foreach($marks as $estudiantes){
    $name= ordenar($estudiantes[0])
    $sumanotas= $marks[1] * 0.35 + $marks[2] * o.15 + $marks[3] * 0.50;

echo "<tr><td>";
echo ordenar($estudiantes["project"]);
echo "</td><td>";
echo $sumanotas;
echo "</td></tr>";
}
echo "</table>";