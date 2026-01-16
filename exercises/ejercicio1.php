<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercise</title>
</head>
<body>
    <?php
        $radius = 12;
        $circumference = 2 * M_PI * $radius;
        $area = M_PI * pow($radius, 2);

        echo "<h3>Circumference and Area</h3>";
        echo "Radius: $radius cm<br>";
        echo "Circumference: " . round($circumference, 2) . " cm<br>";
        echo "Area: " . round($area, 2) . " cm²<br><br>";


        $a = 7;
        $b = 4;

        echo "<h3>Operations with $a and $b</h3>";
        echo "Addition: ",$a, "+", $b, "=", $a + $b,"</br>";
        echo "Subtraction: " . ($a - $b) . "<br>";
        echo "Multiplication: " . ($a * $b) . "<br>";
        echo "Division: " . ($a / $b) . "<br>";
        echo "Modulus: ($a % $b) ";    
        echo "Power: " . pow($a, $b) . "<br><br>";

        $word1 = "Good";
        $word2 = "morning";

        echo "<h3>Greeting</h3>";
        echo $word1 . " " . $word2 . "!";
    ?>
</body>
</html>
