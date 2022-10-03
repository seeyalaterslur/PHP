<?php
  $a = $_POST['t'];

  for($j = 1; $j<=$a; $j++){
    for($i = 1; $i<=$j; $i++){
      echo "*";
    }
    echo '<br>';
  }

?>