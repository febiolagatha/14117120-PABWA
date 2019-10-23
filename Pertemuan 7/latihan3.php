
<?php

function faktorial($a){
  $b=1;
  for($i=$a;$i>0;$i--){
    $b=$b*$i;
  }

  $a=$b;

}

$n = 0;

faktorial($n);
echo "faktorial($n)";

?>
