<?php
  $a = $_POST['thn'];

    if($a%4==0){
        echo '<font color="red">Tahun </font>'.$a.' <font color="red"> Adalah tahun kabisat</font>';
      } 
    else{
        echo '<font color="blue">Tahun </font>'.$a.' <font color="blue"> Bukan tahun kabisat</font>';
      }

?>