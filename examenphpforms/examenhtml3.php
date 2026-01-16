<?php
session_start();

/* Saving data of the previous file*/
$_SESSION["children1"] = $_POST["children1"];
$_SESSION["children2"] = $_POST["children2"];
$_SESSION["teens"]     = $_POST["teens"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Exam 3</title>
</head>
<body>
<form action="examenphp4.php" method="post">
    <fieldset>
        <legend>Buyer</legend>
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Surnames:</label>
            <input type="text" name="surnames" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Phone:</label>
            <input type="tel" name="telephone" required>
        </div>
    </fieldset>
    <fieldset>
        <div>
            <input type="submit" value="Finish">
        </div>
    </fieldset>
</form>
</body>
</html>
