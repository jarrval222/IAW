<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $_SESSION["user"]= "123456";
    $_SESSION["role"]= "provider";
    ?>
</body>
</html>