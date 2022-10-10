<?php
$mahasiswa = [
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
]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1></h1>
    <br />
    <form action="" method="post">
        FILTER NIM <input type="text" name="filter" />
        <input type="submit" value="Filter" />
    </form>
    <br />
    <table>
        <tr bgcolor="cyan">
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>IPK</th>
        </tr>
        <?php $i = 0; ?>
        <?php
        if (isset($_POST['filter'])) {
            for ($j = 0; $j < sizeof($mahasiswa); $j++) {
                $index = array_search($_POST['filter'], array_column($mahasiswa, 'NIM'));
            }
            if (!is_bool($index)) {
        ?>
                <tr>
                    <td><?= $i + 1; ?></td>
                    <td><?= $mahasiswa[$index]["NIM"]; ?></td>
                    <td><?= $mahasiswa[$index]["Nama"]; ?></td>
                    <td><?= $mahasiswa[$index]["IPK"]; ?></td>
                </tr>
                <?php
            } else {
                foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?= $i + 1; ?></td>
                        <td><?= $mhs["NIM"]; ?></td>
                        <td><?= $mhs["Nama"]; ?></td>
                        <td><?= $mhs["IPK"]; ?></td>
                    </tr>
                    <?php $i++; ?>
            <?php
                endforeach;
            };
            ?>
            <?php
        } else {
            foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $i + 1; ?></td>
                    <td><?= $mhs["NIM"]; ?></td>
                    <td><?= $mhs["Nama"]; ?></td>
                    <td><?= $mhs["IPK"]; ?></td>
                </tr>
                <?php $i++; ?>
        <?php
            endforeach;
        }
        ?>
    </table>
</body>

</html>