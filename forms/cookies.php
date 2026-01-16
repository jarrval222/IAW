<?php
session_start();
?>
    <?php
    $cookie_name = "user";
    $cookie_value = "Margareth Keaton";
    $cookie_password = "Qpf5n";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("password", $cookie_password, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie($cookie_name, "Donald Watson", time() + (86400 * 30), "/"); // 86400 = 1 day
    ?>
<html lang="en">
<head>
    <title>Cookies</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie " . $cookie_name . "' is not set!";
    }
    else {
        echo "Value of ", $cookie_name , " cookie is: " , $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>