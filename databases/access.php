<?php
$dsn = "mysql:host=localhost;dbname=Library";
$user= "root";
$password ="";
$connection = new PDO($dsn,$user,$password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>