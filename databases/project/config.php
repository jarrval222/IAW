<?php
$host = "localhost";
$user = "root";
$password = ""; 

try {
    $pdo = new PDO("mysql:host=$host", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "The connection failed.", $exception->getmessage();}
?>