<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php
    $sizes = array(
        "small" => 4, "medium" => 6, "large" => 7.5, "enormous" => 9
    );

    $ingredients = array(
        "anchovies" => 1, "squid" => 1.5, "mussels" => 1, "ham" => 1.2, "omelette" => 0.8, "cheese" => 0.8, "meat_sauce" => 2, "pork_loin" => 1.2, "bacon" => 1, "giraffe" => 100
    );

    $total = $sizes[$_SESSION["Size"]];

    foreach($_SESSION["Ingredients"] as $ingredient){
        $total += $ingredients[$ingredient];
    }

    echo "The total price of your selected ingredients is: " . $total . "€<br>";
    echo $_SESSION["FirstName"] . ", ";

    if ($_SESSION["delivery"] == "pickup") {
        echo "you can pick up your order in 15 minutes.";
    } else {
        echo "your order will arrive in 30 minutes.";
    }
?>
</body>
</html>