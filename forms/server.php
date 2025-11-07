<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <?php
        foreach ($_POST as $field => $value){
            echo "<tr>";
            echo "<td>", htmlspecialchars($field), "</td>";
            echo "<td>";
            if (is_array($value)){
                echo implode(", ", array_map("htmlspecialchars", $value));
            } else {
                echo htmlspecialchars($value);
            }
            echo "</td>";
        }
        ?>
    </table>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label>Name:</label><input type="text" name="name"/>
        <input type="submit"/>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["name"];
    }
    ?>
    </body>
</html>