<?php
    $computers = array("A210" => 28, "A211"=> 30, "A212" => 32, "A213" => 28);
    echo "<table> <caption> COMPUTERS IN CLASSROOMS </caption>";
    echo "<tr> th>Classroom</th> <th>Number of Computers</th> </tr>";
    foreach ($computers as $classroom => $numcomputers){
    echo "<tr> <td>", $classroom, "</td> <td>", $numcomputers, "</td> </tr>";
    } 
    echo "</table>";
    var_dump ($computers);
?>