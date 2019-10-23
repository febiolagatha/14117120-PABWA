<?php

function tukar(&$a,&$b) {
  $c = $a;
  $a = $b;
  $b = $c;

}
$a=50;
$b=75;
tukar($a,$b);
  echo"tukar($a,$b)";
  ?>
