<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $_SESSION["name"]= $_POST["name"];
    $_SESSION["surnames"]= $_POST["surnames"];
    ?>
    <a href="session2.3.php">Go to session2.1.php</a>
</body>
</html>