<?php
$temperatures=array (
    array(1,12,26),
    array(2,11,24),
    array(3,15,24)
);
echo "<table><caption>Table of temperatures</caption>";
echo "<tr><th>Day</th><th>Minimum</th><th>Maximum</th></tr>";
foreach ($temperatures as $day) {
    echo "<tr>";
    foreach ($day as $col) {
        echo "<td>", $col,"</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>