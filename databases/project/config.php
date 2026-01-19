<?php
host = "localhost";
user = "root";
pass = "";
db   = "evento_simple";

try {
    pdo = new PDO("mysql:host=host", user, pass);
    pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    pdo->exec("CREATE DATABASE IF NOT EXISTS db");
    pdo->exec("USE db");

    // 1. Organizers: id, name, email, phone
    pdo->exec("CREATE TABLE IF NOT EXISTS organizers (id_organizer INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(100) NOT NULL,email VARCHAR(100),phone VARCHAR(15))");

    // 2. Events: id, name, date, location, id_organizer
    pdo->exec("CREATE TABLE IF NOT EXISTS events (id_event INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(150) NOT NULL,date DATE,location VARCHAR(255),id_organizer INT,FOREIGN KEY (id_organizer) REFERENCES organizers(id_organizer) ON DELETE CASCADE)");

    // 3. Attendees: id, name, email, phone, id_event
    pdo->exec("CREATE TABLE IF NOT EXISTS attendees (id_attendee INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(100) NOT NULL,email VARCHAR(100),phone VARCHAR(15),id_event INT,FOREIGN KEY (id_event) REFERENCES events(id_event) ON DELETE CASCADE)");

} catch (PDOException e) {
    die("Error crítico: " . e->getMessage());
}
?>