<?php
include "../class/Barang.php";

$b = new barang();
$arBrg = $b->tampilkanBarang();

foreach ($arBrg as $x) {
  echo $x["nama"] . " | " . $x["harga"] . "<br>";
}

echo "Total Bayar: " . $b->jumlah();
