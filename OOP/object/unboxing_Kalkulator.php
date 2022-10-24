<?php

include "../class/kalkulator.php";

$x = $_POST["n1"];
$y = $_POST["n2"];

$kl = new kalkulator();
$kl->nilai1 = $x;
$kl->nilai2 = $y;

echo "Hasil Penjumlahan " . $kl->tambahkan() . "<br>" . "<br>";
echo "Jenis Bilangan" . $kl->cekBilangan() . "<br>";
