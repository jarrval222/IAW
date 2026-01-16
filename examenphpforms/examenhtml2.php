<?php
session_start();

/* Saving data of the previous file*/
$_SESSION['date'] = $_POST['date'];
$_SESSION['kind'] = $_POST['kind'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Exam 2</title>
</head>
<body>
<form action="examenhtml3.php" method="post">
    <fieldset>
        <legend>Number of visitors</legend>

        <div>
            <label>Children Visitors (0-5):</label>
            <input type="number" name="children1" required>
        </div>

        <div>
            <label>Children Visitors (6-12):</label>
            <input type="number" name="children2" required>
        </div>

        <div>
            <label>Teenagers and adults Visitors (over 12):</label>
            <input type="number" name="teens" required>
        </div>
    </fieldset>

    <fieldset>
        <div>
            <input type="submit" value="Next page">
        </div>
    </fieldset>
</form>
</body>
</html>
