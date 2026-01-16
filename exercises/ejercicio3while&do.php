<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
    $x=50;
    do {
        echo $x, " ";
        $x = $x + 2;
    } while ($x <= 80);
    ?>
    </div>

    <div>
    <?php
    $x=17;
    do {
        echo $x, " ";
        $x = $x - 1;
    } while ($x >= -17);
    ?>
    </div>

    <div>
    <table>
        <thead>
        <tr>
            <th>Multiplication Table of 6</th>
        </tr>
        </thead>
        <tbody>
    <?php
    $x=0;
    do { 
        echo "<tr><td> 6 x $x = ", 6*$x, " </td></tr>";
        $x = $x + 1;
    } while ($x <= 10); 
    ?>
        </tbody>
    </table>
    </div>
</body>
</html>
