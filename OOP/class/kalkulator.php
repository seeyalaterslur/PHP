<?php
class kalkulator
{
  //attribut
  //acc. modifier + nama attr

  public $nilai1;
  public $nilai2;
  public $hasil;
  public $keterangan;

  //method
  //acc. modifier + function + nama method + (parameter){....}

  //non void
  public function tambahkan()
  {
    $this->hasil = $this->nilai1 + $this->nilai2;
    return $this->hasil;
  }

  public function cekBilangan()
  {
    if ($this->hasil % 2 == 0) {
      $this->keterangan = "Bilangan Genap";
    } else {
      $this->keterangan = "Bilangan Ganjil";
    }
    return $this->keterangan;
  }
}
