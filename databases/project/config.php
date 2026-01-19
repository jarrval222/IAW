<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "evento_simple";

$pdo = new PDO("mysql:host=$host", $user, $pass);
$pdo->exec("CREATE DATABASE IF NOT EXISTS $db");
$pdo->exec("USE $db");

// Crear tablas
$pdo->exec("CREATE TABLE IF NOT EXISTS organizers (id_organizer INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(100), email VARCHAR(100), phone VARCHAR(15))");
$pdo->exec("CREATE TABLE IF NOT EXISTS events (id_event INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(150), date DATE, location VARCHAR(255), id_organizer INT, FOREIGN KEY (id_organizer) REFERENCES organizers(id_organizer) ON DELETE CASCADE)");
$pdo->exec("CREATE TABLE IF NOT EXISTS attendees (id_attendee INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(100), email VARCHAR(100), id_event INT, FOREIGN KEY (id_event) REFERENCES events(id_event) ON DELETE CASCADE)");

echo "Base de datos lista. <a href='index.php'>Ir al Sistema</a>";
?>