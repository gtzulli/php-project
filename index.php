<?php
$defVal = 7;
function myCalc($x = 0,$y =0){
    global $defVal;
      return ($x + $y) * $defVal;
  }
  echo myCalc(3,5);
  echo "<br/>" .$defVal;
 

?>