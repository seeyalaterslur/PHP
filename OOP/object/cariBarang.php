<?php
include "../class/Barang.php";


//membuat object
$B = new barang();
$hasil = $B->cari("CocaCola");

foreach ($hasil as $y) {
  echo $y["nama"] . "  |  " . $y["harga"] . "<br>";
}
