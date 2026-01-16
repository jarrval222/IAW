<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    echo "<div>Name: ", $_SESSION["name"] , "</div>";
    echo "<div>Surnames: ", $_SESSION["surnames"] , "</div>";
    ?>
</body>
</html>