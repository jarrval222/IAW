<?php
function area($base, $height){
    return ($base * $height);
}
function perimeter($base, $height){
    return $base *2 + $height *2;
}
function interchange(&$base, &$height){
    $auxiliary=$base;
    $base=$height;
    $height=$auxiliary;
}
$base = 5;
$height = 7;
echo "<div> The area is ", area($base, $height), "<div>";
echo "<div> The perimeter is ", perimeter($base, $height), "<div>";
interchange($base, $height);
echo "<div> The base now is ", $base, " and the height is ", $height, "<div>";