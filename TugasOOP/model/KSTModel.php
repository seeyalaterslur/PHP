<?php
class KSTModel
{
  public $kst = [
    ["kode" => '001', "hari" => 'Senin', 'jam' => '09.00 - 11.00', 'matkul' => 'Kewarganegaraan', 'dosen' => 'Wartoyo'],
    ["kode" => '002', "hari" => 'Selasa', 'jam' => '07.00 - 10.00', 'matkul' => 'Pemodelan', 'dosen' => 'Yulianto'],
    ["kode" => '003', "hari" => 'Rabu', 'jam' => '16.00 - 18.00', 'matkul' => 'Matematika', 'dosen' => 'Suprihadi'],
    ["kode" => '004', "hari" => 'Kamis', 'jam' => '09.00 - 11.00', 'matkul' => 'Basis Data', 'dosen' => 'Adi Nugroho'],

  ];

  public function getAll_KST()
  {
    return $this->kst;
  }

  public function getDetail($kode)
  {
    foreach ($this->kst as $ls) {
      if ($ls['kode'] == $kode) {
        return array("kode" => $ls['kode'], "hari" => $ls['hari'], 'jam' => $ls['jam'], 'matkul' => $ls['matkul'], 'dosen' => $ls['dosen']);
      }
    }
  }
}
