<?php
  $brg = $_POST["brg"];
  $hrg = $_POST["hrg"];
  $jmlh = $_POST["jmlh"];
  
  $totalsem = $hrg * $jmlh;

  if ($totalsem > "100000" && $totalsem < "200000"){
    $diskon = 5/100*$totalsem;
  } else if ($totalsem > "200000" && $totalsem < "300000"){
    $diskon = 7/100*$totalsem;
  } else if ($totalsem > "300000"){
    $diskon = 10/100*$totalsem;
  } else {
    $diskon = 0;  
  }

  $totalasli = $totalsem - $diskon;

  echo "Nama Barang : ".$brg."<br>";
  echo "Harga Barang : ".$hrg."<br>";
  echo "Jumlah Barang : ".$jmlh."<br>";
  echo "Diskon : ".$diskon."<br>";
  echo "Total :".$totalasli."<br>"





?>