<?php
    $x = $_POST['VX'];
    $y = $_POST['VY'];


    while($x<=$y){
      if($x%2!=0){
        echo '<span style="color:blue">'.$x.'</span><br>';
      }
        else{
        echo $x ,'<br>';
        }
    $x++;
}
?>