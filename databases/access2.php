<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 try {
 $connection = new PDO("mysql:host=$server", $user, $password);
 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "DROP DATABASE if exists Library";
 $connection->query($sql);
 $sql = "CREATE DATABASE if not exists Library";
 $connection->query($sql);
 $sql = "USE Library";
 $connection->query($sql);
 $sql = "CREATE TABLE if not exists Books(idb int PRIMARY KEY, name varchar(30), type varchar(15))";
 $connection->query($sql);
 $sql = "CREATE TABLE if not exists Readers(idr int PRIMARY KEY, name varchar(30), age int)";
 $connection->query($sql);
 $sql = "CREATE TABLE if not exists Lendings(idl int, idr int, idb int, foreign key(idr) references Readers(idr), foreign key(idb) references Books(idb))";
 $connection->query($sql);
 $sql = "insert into Books (idb, name, type) values ('7957', 'Paco', 'Romance')";
 $connection->query($sql);
 $sql = "insert into Readers (idr, name, age) values ('7954', 'Miguel', '19')";
 $connection->query($sql);
 $sql = "insert into Lendings (idl, idr, idb) values ('10001', '7954', '7957')";
 $connection->query($sql);
 echo "Library database has been created successfully";
 }
 catch (PDOException $exception){
 echo "The connection failed.", $exception->getmessage();
 }
 ?>
