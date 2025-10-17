<?php
function triple(&$number){
  return $number *= 3;
}
$num = 2;
echo triple($num);
?>