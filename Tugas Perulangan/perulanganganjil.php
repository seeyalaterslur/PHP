<?php
  $x = $_POST['VX'];
  $y = $_POST['VY'];

  for($j = $x; $j <= $y; $j++){
    if($j%2==0){
        echo '<span style="color:red">'.$j.'</span><br>';
      } 
    else{
        echo $j ,'<br>';
      }
}

?>