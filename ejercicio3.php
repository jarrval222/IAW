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
    for ($x=50; $x<=80; $x= $x + 2){
            echo $x, " ";
    }
    ?>
    </div>
    <div>
    <?php
    for ($x=17; $x>=-17; $x--){
        echo " \ ", $x, " ";
        }
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
        for ($x=0; $x<=10; $x++){
        echo "<tr>", "<td>", " 6 x $x", " = ", 6*$x, " ", "</td>", "</tr>";
    }
    ?>
        </tbody>
    </table>
  </div>
