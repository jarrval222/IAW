<?php
include "access.php";
$sql = "DELETE FROM Readers WHERE idr=?";
$statement = $connection->prepare($sql);
$statement->bindParam(1, $idr);
$idr = 4;
$statement->execute();
echo "The reader with id ", $idr, " has been deleted";

$connection = null;
?>