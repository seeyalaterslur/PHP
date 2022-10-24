<?php
class UserModel
{
  public $kst = [
    ["nim" => '672020232', 'nama' => 'Aryudha Willy', "pass" => '16122001'],
  ];

  public function cekLogin($nim, $pass)
  {
    foreach ($this->kst as $ls) {
      if ($ls['nim'] == $nim && $ls['pass'] == $pass) {
        return true;
      }
    }
    return false;
  }

  public function getNama_nim($nim)
  {
    foreach ($this->kst as $ls) {
      if ($ls['nim'] == $nim) {
        return $ls['nama'];
      }
    }
  }
}
