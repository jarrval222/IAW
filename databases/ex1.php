<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 try {
 $connection = new PDO("mysql:host=$server", $user, $password);
 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "select distinct city from customers order by city ascending";
 $result = $connection->query($query);
 echo "<select name="city">";
 echo "<option value="">Select city</option>";

 while ($columna =$result->fetch()){
    echo "<option value="" . $columna['city]
 }


 echo "Library database has been created successfully";
 }
 catch (PDOException $exception){
 echo "The connection failed.", $exception->getmessage();
 }
 ?>
