<?php
function area($base, $height){
    return ($base * $height);
}
function perimeter($base, $height){
    return $base *2 + $height *2;
}
function interchange(&$base, &$height){
    $height2=$base;
    $base=$height;
}
$base = 5;
$height = 7;
echo "<div>", area($base, $height), "<div>";
echo "<div>", perimeter($base, $height), "<div>";
echo "<div>", $base, $height2, "<div>";