<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php
    setcookie("first_name", $_POST["FirstName"], time() + 86400 * 30, "/");
    setcookie("last_name", $_POST["LastName"], time() + 86400 * 30, "/");
    setcookie("address", $_POST["Address"], time() + 86400 * 30, "/");
    setcookie("city", $_POST["City"], time() + 86400 * 30, "/");
    setcookie("postal_code", $_POST["PostalCode"], time() + 86400 * 30, "/");
    setcookie("phone", $_POST["Phone"], time() + 86400 * 30, "/");
    setcookie("email", $_POST["Email"], time() + 86400 * 30, "/");

    $_SESSION["FirstName"] = $_POST["FirstName"];
    $_SESSION["LastName"] = $_POST["LastName"];
    $_SESSION["Address"] = $_POST["Address"];
    $_SESSION["City"] = $_POST["City"];
    $_SESSION["PostalCode"] = $_POST["PostalCode"];
    $_SESSION["Phone"] = $_POST["Phone"];
    $_SESSION["Email"] = $_POST["Email"];
    $_SESSION["Ingredients"] = $_POST["Ingredients"];
    $_SESSION["Size"] = $_POST["Size"];
    $_SESSION["delivery"] = $_POST["delivery"];

    echo "<div>Your name is " . $_SESSION["FirstName"] . " " . $_SESSION["LastName"] .
         ", living at " . $_SESSION["Address"] .
         " in the city of " . $_SESSION["City"] .
         ", phone number " . $_SESSION["Phone"] .
         ", postal code " . $_SESSION["PostalCode"] .
         ", email " . $_SESSION["Email"] .
         ", and you have ordered a " . $_SESSION["Size"] .
         " sandwich with the following ingredients:</div>";

    echo "<ul>";
    foreach($_SESSION["Ingredients"] as $value){
        echo "<li>$value</li>";
    }
    echo "</ul>";
?>
<a href="form3asir.php">Click to see delivery time</a>
</body>
</html>