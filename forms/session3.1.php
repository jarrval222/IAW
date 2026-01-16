<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
    <body>
        <?php
        if(isset($_SESSION["user"])){
            echo "The session is closed";
        }
        ?>
    </body>
</html>