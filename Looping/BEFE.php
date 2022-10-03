<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <table border="1" align="center">
                <tr>
                    <th>Input nomer</th>
                </tr>
                <tr>
                    <td>
                        <span>Masukkan Tahun: </span>
                        <input type="number" name="thn" id="" /> <br />
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit">Cek</button>
                    </th>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php

if(isset($_POST['thn'])){

        $a = $_POST['thn'];

            if($a%4==0){
            echo '<font color="red">Tahun </font>'.$a.' <font color="red"> Adalah tahun kabisat</font>';
            } 
                else{
                    echo '<font color="blue">Tahun </font>'.$a.' <font color="blue"> Bukan tahun kabisat</font>';
                }
}

?>
