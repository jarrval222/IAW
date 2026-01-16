<?php
$h=date("H");
if ($h <12){
    echo "Good morning";
}
elseif ($h <22){
    echo "Good afternoon";
} 
else{
    echo "Good night";
}
?>