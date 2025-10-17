<?php
    $integer = 40;

    for($i = 1; $i <= $integer; $i++) {
        if($integer % $i == 0) {
            echo $i . " ";
        }
    }
?>