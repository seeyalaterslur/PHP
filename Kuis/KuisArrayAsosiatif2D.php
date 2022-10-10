<?php

//$b = [[],[],[]] array 2d
$biodata = [
  [
    "NO" => 1,
    "NIM" => "001",
    "Nama" => "Adnan",
    "IPK" => 3.9
  ], [
    "NO" => 2,
    "NIM" => "002",
    "Nama" => "Cahyo",
    "IPK" => 3.8
  ], [
    "NO" => 3,
    "NIM" => "003",
    "Nama" => "Andrew",
    "IPK" => 3.7
  ],
  [
    "NO" => 4,
    "NIM" => "004",
    "Nama" => "Dimas",
    "IPK" => 3.6
  ], [
    "NO" => 5,
    "NIM" => "005",
    "Nama" => "Rachel",
    "IPK" => 3.7
  ]
];

echo "<table border = '1' width='100%'>";
echo "<tr bgcolor = 'cyan '><td>No</td><td>NIM</td><td>NAMA</td><td>IPK</td></tr>";

foreach ($biodata as $a) {
  echo "<tr><td>" . $a["NO"] . "</td><td>" . $a["NIM"] . "</td><td>" . $a["Nama"] . "</td><td>" . $a["IPK"] . "</td></tr>";
}
echo "</table>";
