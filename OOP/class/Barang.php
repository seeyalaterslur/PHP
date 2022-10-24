<?php
class barang
{
  public $dataBarang = [
    [
      "nama" => 'Nutrisari', "harga" => 3000
    ],
    [
      "nama" => 'CocaCola', "harga" => 5000
    ]
  ];
  public $totalBayar;

  public function tampilkanBarang()
  {
    return $this->dataBarang;
  }

  public function jumlah()
  {
    foreach ($this->dataBarang as $brg) {
      $this->totalBayar = $this->totalBayar + $brg["harga"];
    }
    return $this->totalBayar;
  }

  public function cari($key)
  {
    foreach ($this->dataBarang as $brg) {
      if ($brg["nama"] == $key) {
        $hsNama = $brg["nama"];
        $hsHarga = $brg["harga"];
      }
    }
    //boxing kedalam array assosiatif
    $hsDataBarang = [
      [
        "nama" => $hsNama,
        "harga" => $hsHarga
      ]
    ];
    return $hsDataBarang;
  }
}
