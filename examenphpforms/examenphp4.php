<?php
session_start();

/* Saving cookies */
setcookie("email", $_POST["email"], time() + 86400 * 30, "/");
setcookie("telephone", $_POST["telephone"], time() + 86400 * 30, "/");
setcookie("date", $_SESSION["date"], time() + 86400 * 30, "/");

/* aving data of login */
$_SESSION["name"]       = $_POST["name"];
$_SESSION["surnames"]   = $_POST["surnames"];
$_SESSION["email"]      = $_POST["email"];
$_SESSION["telephone"]  = $_POST["telephone"];

/* Prices */
$standard = [
    "children1" => 0,
    "children2" => 10,
    "teens"     => 15
];

$dramatized = [
    "children1" => 0,
    "children2" => 15,
    "teens"     => 20
];

/* Choose depending of the type of visit */
if ($_SESSION["kind"] == "Standard") {
    $prices = $standard;
} else {
    $prices = $dramatized;
}

/* Total calculation */
$total =
    ($_SESSION["children1"] * $prices["children1"]) + ($_SESSION["children2"] * $prices["children2"]) + ($_SESSION["teens"]     * $prices["teens"]);

/*Information displayed*/
echo "Tickets for " . $_SESSION["teens"] . " adults and " . $_SESSION["children2"] . " children (6-12) and " . $_SESSION["children1"] . " children (0-5) in " . $_SESSION["kind"] . " visit, " . $_SESSION["date"];
echo "<div>Buyer: ". $_SESSION["name"] . " " . $_SESSION["surnames"] . "</div>";
echo "<div>Email: " . $_SESSION["email"] . "</div>";
echo "<div>Telephone: " . $_SESSION["telephone"] . "</div>";
echo "<div>Total price: " . $total . "$</div>";
?>
