<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $_SESSION["role"]= "provider";
    echo "<div>User: ", $_SESSION["user"] , "</div>";
    echo "<div>Role: ", $_SESSION["role"] , "</div>";
    session_unset();
    var_dump($_SESSION);
    ?>
</body>
</html>