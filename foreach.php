<?php
    $drinks = array("Coffee", "Tea", "Water", "Beer", "Wine", "Soft drink"); // Create an array of drinks
    echo "<h1>DRINKS</h1>"; 
    echo "<ul>";
    foreach ($drinks as $b) { // Loop through each drink in the array
    echo "<li>", $b, "</li>"; // Print each drink as a list item
    }
    echo "</ul>";
    var_dump ($drinks);
?>