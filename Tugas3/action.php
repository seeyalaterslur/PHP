<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="action.php" method="post">
    <table border="1" align="center">
      <tr>
        <td>Nomer</td>
        <td>Nama Barang</td>
        <td>Harga</td>
        <td>Beli</td>
      </tr>
      </tr>
      <td>1</td>
      <td>Keyboard</td>
      <td>Rp 80.000</td>
      <td><input type="checkbox" name="barang[]" value="Keyboard"></td>
      <input type="hidden" name="harga" value='12345678'>
      </tr>
      <tr>
        <td>2</td>
        <td>Mouse</td>
        <td>Rp 100.000</td>
        <td><input type="checkbox" name="barang[]" value="Mouse"></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Monitor</td>
        <td>Rp 600.000</td>
        <td><input type="checkbox" name="barang[]" value="Monitor"></td>
      </tr>
      <tr>
        <td>4</td>
        <td>Printer</td>
        <td>Rp 1.000.000</td>
        <td><input type="checkbox" name="barang[]" value="Printer"></td>
      </tr>
      <tr>
        <td>5</td>
        <td>Speaker</td>
        <td>Rp 300.000</td>
        <td><input type="checkbox" name="barang[]" value="Speaker"></td>
      </tr>
      <tr>
        <th colspan="4">
          <button type="submit" name="submit">Belanja</button>
        </th>
      </tr>
    </table> <br>
  </form>
</body>

</html>

<?php

$totalharga = 0;
if (isset($_POST['barang']) && is_array($_POST['barang'])) {

  echo '<h3>DETAIL PEMBAYARAN</h3>';
  echo '<table border="1" cellspacing="0">';
  echo '<tr><th colspan="2">KERANJANG BELANJA</th></tr>';

  for ($i = 0; $i < sizeof($_POST['barang']); $i++) {

    echo '<tr><td>' . $_POST['barang'][$i] . '</td>';

    if ($_POST['barang'][$i] == "Keyboard") {
      echo '<td>Rp    80.000,00</td>';
      $totalharga = $totalharga + 80000;
    } else if ($_POST['barang'][$i] == "Mouse") {
      echo '<td>Rp    100.000,00</td>';
      $totalharga = $totalharga + 100000;
    } else if ($_POST['barang'][$i] == "Monitor") {
      echo '<td>Rp    600.000,00</td>';
      $totalharga = $totalharga + 600000;
    } else if ($_POST['barang'][$i] == "Printer") {
      echo '<td>Rp    1.000.000,00</td>';
      $totalharga = $totalharga + 1000000;
    } else if ($_POST['barang'][$i] == "Speaker") {
      echo '<td>Rp    300.000,00</td>';
      $totalharga = $totalharga + 300000;
    }

    echo '</tr>';
  }
  echo '<tr><td><b>Total Harga</b></td><td><b>Rp  ' . number_format($totalharga, 2, ',', '.') . '</b></td></tr>';
  echo '</table>';
}
