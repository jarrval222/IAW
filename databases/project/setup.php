<?php
include 'config.php';

try {
    $db= "project";
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $db");
    $pdo->exec("USE $db");

    // Tabla Organizadores
    $pdo->exec("CREATE TABLE IF NOT EXISTS organizers (
        id_organizer INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100),
        phone VARCHAR(15)
    )");

    // Tabla Eventos
    $pdo->exec("CREATE TABLE IF NOT EXISTS events (
        id_event INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(150) NOT NULL,
        date DATE,
        location VARCHAR(255),
        id_organizer INT,
        FOREIGN KEY (id_organizer) REFERENCES organizers(id_organizer) ON DELETE CASCADE
    )");

    // Tabla Asistentes
    $pdo->exec("CREATE TABLE IF NOT EXISTS attendees (
        id_attendee INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100),
        phone VARCHAR(15),
        id_event INT,
        FOREIGN KEY (id_event) REFERENCES events(id_event) ON DELETE CASCADE
    )");

    echo "Base de datos y tablas creadas con éxito.";
} catch (PDOException $e) {
    die("Error en setup: " . $e->getMessage());
}
?>